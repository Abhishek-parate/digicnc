<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\ContentRepository;
use App\Core\Database;
use App\Core\Security;
use App\Core\View;
use App\Models\Lead;
use PDO;

final class AdminController
{
    public function __construct(private ContentRepository $repo, private View $view)
    {
    }

    public function login(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!Security::validateCsrf($_POST['_csrf'] ?? null)) {
                $_SESSION['admin_flash'] = ['type' => 'error', 'message' => 'Invalid security token.'];
                $this->redirect('admin/login');
            }

            $email = Security::email($_POST['email'] ?? '');
            $password = (string) ($_POST['password'] ?? '');

            if ($email === config('admin.email') && password_verify($password, (string) config('admin.password_hash'))) {
                session_regenerate_id(true);
                $_SESSION['admin_user'] = ['email' => $email, 'logged_in_at' => date('c')];
                $this->redirect('admin');
            }

            $_SESSION['admin_flash'] = ['type' => 'error', 'message' => 'Invalid admin credentials.'];
            $this->redirect('admin/login');
        }

        $this->view->render('admin/login', [
            'title' => 'Admin Login',
        ], 'admin/layout');
    }

    public function logout(): void
    {
        unset($_SESSION['admin_user']);
        $this->redirect('admin/login');
    }

    public function dashboard(): void
    {
        $this->guard();
        $pdo = Database::connection();
        $counts = [
            'leads' => Lead::count(),
            'blogs' => $this->countTable($pdo, 'blogs', count($this->repo->blogs())),
            'gallery' => $this->countTable($pdo, 'gallery_items', count($this->repo->gallery())),
            'faqs' => $this->countTable($pdo, 'faqs', count($this->repo->faqs())),
        ];

        $this->view->render('admin/dashboard', [
            'title' => 'Dashboard',
            'counts' => $counts,
            'leads' => Lead::latest(8),
            'modules' => $this->modules(),
        ], 'admin/layout');
    }

    public function module(string $section): void
    {
        $this->guard();
        $modules = $this->modules();
        if (!isset($modules[$section])) {
            $this->redirect('admin');
        }

        $module = $modules[$section];
        $rows = $this->fetchRows($module);

        $this->view->render('admin/list', [
            'title' => $module['title'],
            'section' => $section,
            'module' => $module,
            'rows' => $rows,
            'dbConnected' => Database::connection() instanceof PDO,
        ], 'admin/layout');
    }

    public function store(string $section): void
    {
        $this->guard();
        $modules = $this->modules();
        if (!isset($modules[$section]) || !Security::validateCsrf($_POST['_csrf'] ?? null)) {
            $_SESSION['admin_flash'] = ['type' => 'error', 'message' => 'Unable to save. Please retry.'];
            $this->redirect('admin/' . $section);
        }

        $pdo = Database::connection();
        if (!$pdo) {
            $_SESSION['admin_flash'] = ['type' => 'error', 'message' => 'Database is not connected. Import migrations and configure DB credentials first.'];
            $this->redirect('admin/' . $section);
        }

        $module = $modules[$section];
        $data = [];
        foreach ($module['fields'] as $field => $meta) {
            if (($meta['type'] ?? 'text') === 'file') {
                $data[$field] = $this->upload($section, $field);
                continue;
            }

            if (($meta['type'] ?? 'text') === 'textarea' || ($meta['type'] ?? 'text') === 'richtext') {
                $data[$field] = Security::richText($_POST[$field] ?? '');
            } else {
                $data[$field] = Security::text($_POST[$field] ?? '', $meta['max'] ?? 500);
            }
        }

        if (isset($module['fields']['slug']) && ($data['slug'] ?? '') === '') {
            $data['slug'] = slugify($data['title'] ?? $data['name'] ?? uniqid('item-', true));
        }

        $columns = array_keys($data);
        if (in_array('created_at', $module['auto'] ?? [], true)) {
            $columns[] = 'created_at';
            $data['created_at'] = date('Y-m-d H:i:s');
        }

        $placeholders = array_map(fn (string $column): string => ':' . $column, $columns);
        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $module['table'],
            implode(', ', $columns),
            implode(', ', $placeholders)
        );

        $statement = $pdo->prepare($sql);
        $statement->execute($data);

        $_SESSION['admin_flash'] = ['type' => 'success', 'message' => $module['singular'] . ' saved successfully.'];
        $this->redirect('admin/' . $section);
    }

    private function guard(): void
    {
        if (empty($_SESSION['admin_user'])) {
            $this->redirect('admin/login');
        }
    }

    private function modules(): array
    {
        return [
            'leads' => [
                'title' => 'Manage Leads',
                'singular' => 'Lead',
                'table' => 'leads',
                'readonly' => true,
                'fields' => [],
                'columns' => ['id', 'name', 'phone', 'email', 'service_interest', 'status', 'created_at'],
            ],
            'contact-requests' => [
                'title' => 'Manage Contact Requests',
                'singular' => 'Contact request',
                'table' => 'contact_requests',
                'fields' => [
                    'name' => ['label' => 'Name', 'type' => 'text', 'max' => 120],
                    'phone' => ['label' => 'Phone', 'type' => 'text', 'max' => 40],
                    'email' => ['label' => 'Email', 'type' => 'text', 'max' => 160],
                    'message' => ['label' => 'Message', 'type' => 'textarea', 'max' => 1200],
                    'status' => ['label' => 'Status', 'type' => 'text', 'max' => 40],
                ],
                'columns' => ['id', 'name', 'phone', 'email', 'status', 'created_at'],
                'auto' => ['created_at'],
            ],
            'categories' => [
                'title' => 'Category Management',
                'singular' => 'Category',
                'table' => 'blog_categories',
                'fields' => [
                    'name' => ['label' => 'Category Name', 'type' => 'text', 'max' => 120],
                    'slug' => ['label' => 'Slug', 'type' => 'text', 'max' => 160],
                    'description' => ['label' => 'Description', 'type' => 'textarea', 'max' => 500],
                ],
                'columns' => ['id', 'name', 'slug', 'created_at'],
                'auto' => ['created_at'],
            ],
            'blogs' => [
                'title' => 'Manage Blogs',
                'singular' => 'Blog post',
                'table' => 'blogs',
                'fields' => [
                    'title' => ['label' => 'Title', 'type' => 'text', 'max' => 180],
                    'slug' => ['label' => 'Slug', 'type' => 'text', 'max' => 180],
                    'category' => ['label' => 'Category', 'type' => 'text', 'max' => 120],
                    'excerpt' => ['label' => 'Excerpt', 'type' => 'textarea', 'max' => 500],
                    'content' => ['label' => 'Rich Content', 'type' => 'richtext', 'max' => 10000],
                    'featured_image' => ['label' => 'Featured Image', 'type' => 'file'],
                    'meta_title' => ['label' => 'Meta Title', 'type' => 'text', 'max' => 180],
                    'meta_description' => ['label' => 'Meta Description', 'type' => 'textarea', 'max' => 300],
                    'schema_type' => ['label' => 'Schema Type', 'type' => 'text', 'max' => 80],
                ],
                'columns' => ['id', 'title', 'slug', 'category', 'published_at', 'created_at'],
                'auto' => ['created_at'],
            ],
            'services' => [
                'title' => 'Manage Services',
                'singular' => 'Service',
                'table' => 'services',
                'fields' => [
                    'name' => ['label' => 'Service Name', 'type' => 'text', 'max' => 160],
                    'slug' => ['label' => 'Slug', 'type' => 'text', 'max' => 180],
                    'short_description' => ['label' => 'Short Description', 'type' => 'textarea', 'max' => 500],
                    'content' => ['label' => 'Detailed Content', 'type' => 'richtext', 'max' => 15000],
                    'meta_title' => ['label' => 'Meta Title', 'type' => 'text', 'max' => 180],
                    'meta_description' => ['label' => 'Meta Description', 'type' => 'textarea', 'max' => 300],
                    'status' => ['label' => 'Status', 'type' => 'text', 'max' => 40],
                ],
                'columns' => ['id', 'name', 'slug', 'status', 'created_at'],
                'auto' => ['created_at'],
            ],
            'gallery' => [
                'title' => 'Manage Gallery',
                'singular' => 'Gallery item',
                'table' => 'gallery_items',
                'fields' => [
                    'title' => ['label' => 'Title', 'type' => 'text', 'max' => 160],
                    'category' => ['label' => 'Category', 'type' => 'text', 'max' => 120],
                    'image_path' => ['label' => 'Image', 'type' => 'file'],
                    'alt_text' => ['label' => 'SEO Alt Text', 'type' => 'text', 'max' => 255],
                    'sort_order' => ['label' => 'Sort Order', 'type' => 'text', 'max' => 10],
                ],
                'columns' => ['id', 'title', 'category', 'alt_text', 'sort_order', 'created_at'],
                'auto' => ['created_at'],
            ],
            'testimonials' => [
                'title' => 'Manage Testimonials',
                'singular' => 'Testimonial',
                'table' => 'testimonials',
                'fields' => [
                    'client_name' => ['label' => 'Client Name', 'type' => 'text', 'max' => 160],
                    'client_role' => ['label' => 'Client Role', 'type' => 'text', 'max' => 160],
                    'quote' => ['label' => 'Quote', 'type' => 'textarea', 'max' => 1000],
                    'rating' => ['label' => 'Rating', 'type' => 'text', 'max' => 5],
                    'status' => ['label' => 'Status', 'type' => 'text', 'max' => 40],
                ],
                'columns' => ['id', 'client_name', 'client_role', 'rating', 'status', 'created_at'],
                'auto' => ['created_at'],
            ],
            'faqs' => [
                'title' => 'Manage FAQs',
                'singular' => 'FAQ',
                'table' => 'faqs',
                'fields' => [
                    'question' => ['label' => 'Question', 'type' => 'text', 'max' => 255],
                    'answer' => ['label' => 'Answer', 'type' => 'textarea', 'max' => 1200],
                    'page_slug' => ['label' => 'Page Slug', 'type' => 'text', 'max' => 180],
                    'sort_order' => ['label' => 'Sort Order', 'type' => 'text', 'max' => 10],
                    'status' => ['label' => 'Status', 'type' => 'text', 'max' => 40],
                ],
                'columns' => ['id', 'question', 'page_slug', 'sort_order', 'status', 'created_at'],
                'auto' => ['created_at'],
            ],
            'seo' => [
                'title' => 'Manage SEO',
                'singular' => 'SEO record',
                'table' => 'seo_meta',
                'fields' => [
                    'page_slug' => ['label' => 'Page Slug', 'type' => 'text', 'max' => 180],
                    'meta_title' => ['label' => 'Meta Title', 'type' => 'text', 'max' => 180],
                    'meta_description' => ['label' => 'Meta Description', 'type' => 'textarea', 'max' => 320],
                    'canonical_url' => ['label' => 'Canonical URL', 'type' => 'text', 'max' => 255],
                    'og_title' => ['label' => 'OG Title', 'type' => 'text', 'max' => 180],
                    'og_description' => ['label' => 'OG Description', 'type' => 'textarea', 'max' => 320],
                    'schema_json' => ['label' => 'Custom Schema JSON', 'type' => 'textarea', 'max' => 10000],
                ],
                'columns' => ['id', 'page_slug', 'meta_title', 'canonical_url', 'updated_at'],
            ],
        ];
    }

    private function fetchRows(array $module): array
    {
        if ($module['table'] === 'leads') {
            return Lead::latest(50);
        }

        $pdo = Database::connection();
        if (!$pdo) {
            return [];
        }

        $columns = implode(', ', $module['columns']);
        $statement = $pdo->query(sprintf('SELECT %s FROM %s ORDER BY id DESC LIMIT 100', $columns, $module['table']));
        return $statement ? $statement->fetchAll() : [];
    }

    private function countTable(?PDO $pdo, string $table, int $fallback): int
    {
        if (!$pdo) {
            return $fallback;
        }

        try {
            return (int) $pdo->query('SELECT COUNT(*) FROM ' . $table)->fetchColumn();
        } catch (\Throwable) {
            return $fallback;
        }
    }

    private function upload(string $section, string $field): string
    {
        if (empty($_FILES[$field]['tmp_name']) || !is_uploaded_file($_FILES[$field]['tmp_name'])) {
            return '';
        }

        $file = $_FILES[$field];
        $allowed = ['image/jpeg' => 'jpg', 'image/png' => 'png', 'image/webp' => 'webp'];
        $mime = mime_content_type($file['tmp_name']);
        if (!isset($allowed[$mime]) || (int) $file['size'] > 3 * 1024 * 1024) {
            return '';
        }

        $directory = BASE_PATH . '/public/uploads/' . $section;
        if (!is_dir($directory)) {
            mkdir($directory, 0755, true);
        }

        $filename = slugify(pathinfo($file['name'], PATHINFO_FILENAME)) . '-' . bin2hex(random_bytes(4)) . '.' . $allowed[$mime];
        move_uploaded_file($file['tmp_name'], $directory . '/' . $filename);

        return 'uploads/' . $section . '/' . $filename;
    }

    private function redirect(string $path): void
    {
        header('Location: ' . app_url($path));
        exit;
    }
}

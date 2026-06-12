<?php

declare(strict_types=1);

define('BASE_PATH', dirname(__DIR__));

require BASE_PATH . '/app/helpers.php';

$staticPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
if (preg_match('#^/(assets|uploads)/#', $staticPath) || in_array($staticPath, ['/robots.txt', '/sitemap.xml'], true)) {
    $file = BASE_PATH . '/public' . $staticPath;
    if (is_file($file)) {
        $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        $types = [
            'css' => 'text/css; charset=UTF-8',
            'js' => 'application/javascript; charset=UTF-8',
            'png' => 'image/png',
            'jpg' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'webp' => 'image/webp',
            'txt' => 'text/plain; charset=UTF-8',
            'xml' => 'application/xml; charset=UTF-8',
        ];
        header('Content-Type: ' . ($types[$extension] ?? 'application/octet-stream'));
        readfile($file);
        exit;
    }
}

date_default_timezone_set((string) config('app.timezone', 'Asia/Kolkata'));

session_set_cookie_params([
    'lifetime' => 0,
    'path' => app_base_path() === '' ? '/' : app_base_path(),
    'domain' => '',
    'secure' => (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off'),
    'httponly' => true,
    'samesite' => 'Lax',
]);
session_start();

spl_autoload_register(function (string $class): void {
    $prefix = 'App\\';
    if (!str_starts_with($class, $prefix)) {
        return;
    }

    $relative = str_replace('\\', '/', substr($class, strlen($prefix)));
    $file = BASE_PATH . '/app/' . $relative . '.php';
    if (is_file($file)) {
        require $file;
    }
});

header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('Referrer-Policy: strict-origin-when-cross-origin');
header("Content-Security-Policy: default-src 'self'; script-src 'self' 'unsafe-inline' https://www.googletagmanager.com https://www.google-analytics.com; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; img-src 'self' data: https:; font-src 'self' https://fonts.gstatic.com; frame-src https://www.google.com; connect-src 'self' https://www.google-analytics.com;");

use App\Controllers\AdminController;
use App\Controllers\PageController;
use App\Core\ContentRepository;
use App\Core\Router;
use App\Core\View;

$repo = new ContentRepository(require BASE_PATH . '/app/config/content.php');
$view = new View();
$pageController = new PageController($repo, $view);
$adminController = new AdminController($repo, $view);
$router = new Router();

$router->get('', [$pageController, 'home']);
$router->get('about-us', [$pageController, 'about']);
$router->get('services', [$pageController, 'services']);
$router->get('gallery', [$pageController, 'gallery']);
$router->get('blog', [$pageController, 'blog']);
$router->get('blog/{slug}', [$pageController, 'blogDetail']);
$router->get('contact-us', [$pageController, 'contact']);
$router->post('lead', [$pageController, 'submitLead']);

foreach (array_keys($repo->servicePages()) as $slug) {
    $router->get($slug, fn () => $pageController->service($slug));
}

foreach (array_keys($repo->locationPages()) as $slug) {
    $router->get($slug, fn () => $pageController->location($slug));
}

$router->get('admin', [$adminController, 'dashboard']);
$router->get('admin/login', [$adminController, 'login']);
$router->post('admin/login', [$adminController, 'login']);
$router->get('admin/logout', [$adminController, 'logout']);
$router->get('admin/{section}', [$adminController, 'module']);
$router->post('admin/{section}/store', [$adminController, 'store']);

$router->fallback([$pageController, 'notFound']);

$method = strtoupper($_SERVER['REQUEST_METHOD'] ?? 'GET');
$path = (string) ($_GET['path'] ?? '');
if ($path === '') {
    $requestPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
    $base = app_base_path();
    if ($base !== '' && str_starts_with($requestPath, $base)) {
        $requestPath = substr($requestPath, strlen($base));
    }
    $path = trim($requestPath, '/');
}

$router->dispatch($method, $path);

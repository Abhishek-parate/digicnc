<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\ContentRepository;
use App\Core\Security;
use App\Core\View;
use App\Models\Lead;

final class PageController
{
    public function __construct(private ContentRepository $repo, private View $view)
    {
    }

    public function home(): void
    {
        $this->view->render('pages/home', [
            'repo' => $this->repo,
            'seo' => $this->seo('home', ''),
            'schemas' => $this->schemas('home', '', $this->repo->faqs('home')),
            'breadcrumbs' => [['Home', '']],
        ]);
    }

    public function about(): void
    {
        $this->view->render('pages/about', [
            'repo' => $this->repo,
            'seo' => $this->seo('about', 'about-us'),
            'schemas' => $this->schemas('about', 'about-us'),
            'breadcrumbs' => [['Home', ''], ['About Us', 'about-us']],
        ]);
    }

    public function services(): void
    {
        $this->view->render('pages/services', [
            'repo' => $this->repo,
            'seo' => $this->seo('services', 'services'),
            'schemas' => $this->schemas('services', 'services'),
            'breadcrumbs' => [['Home', ''], ['Services', 'services']],
        ]);
    }

    public function gallery(): void
    {
        $this->view->render('pages/gallery', [
            'repo' => $this->repo,
            'seo' => $this->seo('gallery', 'gallery'),
            'schemas' => $this->schemas('gallery', 'gallery'),
            'breadcrumbs' => [['Home', ''], ['Gallery', 'gallery']],
        ]);
    }

    public function blog(): void
    {
        $this->view->render('pages/blog', [
            'repo' => $this->repo,
            'seo' => $this->seo('blog', 'blog'),
            'schemas' => $this->schemas('blog', 'blog'),
            'breadcrumbs' => [['Home', ''], ['Blog', 'blog']],
        ]);
    }

    public function blogDetail(string $slug): void
    {
        $blog = $this->repo->blog($slug);
        if (!$blog) {
            $this->notFound();
            return;
        }

        $seo = [
            'title' => $blog['title'] . ' | Digi CNC Blog',
            'description' => $blog['excerpt'],
            'keywords' => $blog['category'] . ', CNC Cutting Nagpur, Digi CNC',
            'canonical' => full_url('blog/' . $blog['slug']),
            'image' => full_url($blog['image']),
            'type' => 'article',
        ];

        $schemas = $this->schemas('blog', 'blog/' . $blog['slug']);
        $schemas[] = [
            '@context' => 'https://schema.org',
            '@type' => 'BlogPosting',
            'headline' => $blog['title'],
            'description' => $blog['excerpt'],
            'image' => full_url($blog['image']),
            'datePublished' => $blog['published_at'],
            'author' => ['@type' => 'Organization', 'name' => 'Digi CNC'],
            'publisher' => $this->organizationSchema(),
            'mainEntityOfPage' => full_url('blog/' . $blog['slug']),
        ];

        $this->view->render('pages/blog-detail', [
            'repo' => $this->repo,
            'blog' => $blog,
            'seo' => $seo,
            'schemas' => $schemas,
            'breadcrumbs' => [['Home', ''], ['Blog', 'blog'], [$blog['title'], 'blog/' . $blog['slug']]],
        ]);
    }

    public function contact(): void
    {
        $this->view->render('pages/contact', [
            'repo' => $this->repo,
            'seo' => $this->seo('contact', 'contact-us'),
            'schemas' => $this->schemas('contact', 'contact-us', $this->repo->faqs('contact')),
            'breadcrumbs' => [['Home', ''], ['Contact Us', 'contact-us']],
        ]);
    }

    public function service(string $slug): void
    {
        $service = $this->repo->servicePage($slug);
        if (!$service) {
            $this->notFound();
            return;
        }

        $seo = [
            'title' => $service['title'] . ' | Digi CNC Nagpur',
            'description' => $service['meta_description'],
            'keywords' => $service['keyword'] . ', CNC Router Services, CNC Design Services, Nagpur CNC',
            'canonical' => full_url($slug),
            'image' => full_url($service['image']),
            'type' => 'website',
        ];

        $schemas = $this->schemas('service', $slug, $service['faqs']);
        $schemas[] = $this->serviceSchema($service, $slug);
        $schemas[] = $this->imageSchema($service['title'], $service['image']);

        $this->view->render('pages/service-detail', [
            'repo' => $this->repo,
            'service' => $service,
            'slug' => $slug,
            'seo' => $seo,
            'schemas' => $schemas,
            'breadcrumbs' => [['Home', ''], ['Services', 'services'], [$service['title'], $slug]],
        ]);
    }

    public function location(string $slug): void
    {
        $page = $this->repo->locationPage($slug);
        if (!$page) {
            $this->notFound();
            return;
        }

        $seo = [
            'title' => $page['title'] . ' | Digi CNC Nagpur',
            'description' => $page['meta_description'],
            'keywords' => $page['keyword'] . ', CNC Cutting Service in Nagpur, CNC Router Services',
            'canonical' => full_url($slug),
            'image' => full_url($page['image']),
            'type' => 'website',
        ];

        $schemas = $this->schemas('location', $slug, $page['faqs']);
        $schemas[] = $this->serviceSchema([
            'title' => $page['title'],
            'summary' => $page['meta_description'],
            'keyword' => $page['keyword'],
            'image' => $page['image'],
            'applications' => $this->repo->industries(),
            'materials' => $this->repo->materials(),
        ], $slug);

        $this->view->render('pages/location-detail', [
            'repo' => $this->repo,
            'page' => $page,
            'slug' => $slug,
            'seo' => $seo,
            'schemas' => $schemas,
            'breadcrumbs' => [['Home', ''], [$page['title'], $slug]],
        ]);
    }

    public function submitLead(): void
    {
        $source = Security::text($_POST['source_page'] ?? '/', 160);
        if (!Security::validateCsrf($_POST['_csrf'] ?? null) || !empty($_POST['website'] ?? '')) {
            $this->flash('error', 'Security validation failed. Please refresh the page and try again.');
            $this->redirect($source);
            return;
        }

        $data = [
            'name' => Security::text($_POST['name'] ?? '', 120),
            'email' => Security::email($_POST['email'] ?? ''),
            'phone' => Security::phone($_POST['phone'] ?? ''),
            'company' => Security::text($_POST['company'] ?? '', 160),
            'service_interest' => Security::text($_POST['service_interest'] ?? '', 160),
            'project_budget' => Security::text($_POST['project_budget'] ?? '', 80),
            'message' => Security::text($_POST['message'] ?? '', 1200),
            'source_page' => $source,
        ];

        if ($data['name'] === '' || $data['phone'] === '' || $data['message'] === '') {
            $this->flash('error', 'Please share your name, phone number and project requirement.');
            $this->redirect($source);
            return;
        }

        Lead::create($data);
        $this->flash('success', 'Thank you. Digi CNC has received your inquiry and will contact you shortly.');
        $this->redirect($source);
    }

    public function notFound(): void
    {
        http_response_code(404);
        $this->view->render('pages/not-found', [
            'repo' => $this->repo,
            'seo' => [
                'title' => 'Page Not Found | Digi CNC',
                'description' => 'The requested Digi CNC page could not be found.',
                'keywords' => 'Digi CNC',
                'canonical' => full_url('404'),
                'image' => full_url('assets/images/hero-cnc-workshop.png'),
                'type' => 'website',
            ],
            'schemas' => [$this->organizationSchema(), $this->localBusinessSchema()],
            'breadcrumbs' => [['Home', ''], ['404', '404']],
        ]);
    }

    private function seo(string $key, string $path): array
    {
        $seo = $this->repo->seo($key);
        return array_merge($seo, [
            'canonical' => full_url($path),
            'image' => full_url('assets/images/hero-cnc-workshop.png'),
            'type' => 'website',
        ]);
    }

    private function schemas(string $scope, string $path, array $faqs = []): array
    {
        $schemas = [
            $this->organizationSchema(),
            $this->localBusinessSchema(),
            $this->websiteSchema(),
            $this->breadcrumbSchema($path),
        ];

        if ($faqs) {
            $schemas[] = $this->faqSchema($faqs);
        }

        return $schemas;
    }

    private function organizationSchema(): array
    {
        $company = $this->repo->company();
        return [
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => 'Digi CNC',
            'alternateName' => $company['brand'],
            'url' => full_url(''),
            'logo' => full_url('assets/images/hero-cnc-workshop.png'),
            'founder' => ['@type' => 'Person', 'name' => $company['founder']],
            'telephone' => $company['phone'],
            'areaServed' => ['Nagpur', 'Maharashtra', 'India'],
        ];
    }

    private function localBusinessSchema(): array
    {
        $company = $this->repo->company();
        return [
            '@context' => 'https://schema.org',
            '@type' => 'LocalBusiness',
            'name' => 'Digi CNC',
            'image' => full_url('assets/images/hero-cnc-workshop.png'),
            'url' => full_url(''),
            'telephone' => $company['phone'],
            'priceRange' => '$$',
            'address' => [
                '@type' => 'PostalAddress',
                'addressLocality' => 'Nagpur',
                'addressRegion' => 'Maharashtra',
                'addressCountry' => 'IN',
            ],
            'openingHoursSpecification' => [
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                'opens' => '09:30',
                'closes' => '19:00',
            ],
        ];
    }

    private function websiteSchema(): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'WebSite',
            'name' => 'Digi CNC',
            'url' => full_url(''),
            'potentialAction' => [
                '@type' => 'SearchAction',
                'target' => full_url('services') . '?q={search_term_string}',
                'query-input' => 'required name=search_term_string',
            ],
        ];
    }

    private function breadcrumbSchema(string $path): array
    {
        $items = [
            [
                '@type' => 'ListItem',
                'position' => 1,
                'name' => 'Home',
                'item' => full_url(''),
            ],
        ];

        if ($path !== '') {
            $label = $this->repo->routeLinks()[trim($path, '/')] ?? ucwords(str_replace('-', ' ', trim($path, '/')));
            $items[] = [
                '@type' => 'ListItem',
                'position' => 2,
                'name' => $label,
                'item' => full_url($path),
            ];
        }

        return [
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => $items,
        ];
    }

    private function faqSchema(array $faqs): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => array_map(fn (array $faq): array => [
                '@type' => 'Question',
                'name' => $faq['q'],
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => $faq['a'],
                ],
            ], $faqs),
        ];
    }

    private function serviceSchema(array $service, string $slug): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'name' => $service['title'],
            'description' => $service['summary'],
            'serviceType' => $service['keyword'] ?? $service['title'],
            'provider' => $this->localBusinessSchema(),
            'areaServed' => [
                ['@type' => 'City', 'name' => 'Nagpur'],
                ['@type' => 'State', 'name' => 'Maharashtra'],
            ],
            'hasOfferCatalog' => [
                '@type' => 'OfferCatalog',
                'name' => 'Digi CNC Materials and Applications',
                'itemListElement' => array_map(fn (string $item): array => [
                    '@type' => 'Offer',
                    'itemOffered' => ['@type' => 'Service', 'name' => $item],
                ], array_slice(array_merge($service['applications'], $service['materials']), 0, 12)),
            ],
            'url' => full_url($slug),
        ];
    }

    private function imageSchema(string $name, string $image): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'ImageObject',
            'name' => $name,
            'contentUrl' => full_url($image),
            'caption' => $name . ' by Digi CNC Nagpur',
        ];
    }

    private function flash(string $type, string $message): void
    {
        $_SESSION['flash'] = ['type' => $type, 'message' => $message];
    }

    private function redirect(string $path): void
    {
        header('Location: ' . app_url($path));
        exit;
    }
}

<?php

declare(strict_types=1);

namespace App\Core;

final class ContentRepository
{
    public function __construct(private array $content)
    {
    }

    public function company(): array
    {
        return $this->content['company'];
    }

    public function services(): array
    {
        return $this->content['services'];
    }

    public function servicePages(): array
    {
        return $this->content['service_pages'];
    }

    public function servicePage(string $slug): ?array
    {
        return $this->content['service_pages'][$slug] ?? null;
    }

    public function locationPages(): array
    {
        return $this->content['location_pages'];
    }

    public function locationPage(string $slug): ?array
    {
        return $this->content['location_pages'][$slug] ?? null;
    }

    public function materials(): array
    {
        return $this->content['materials'];
    }

    public function industries(): array
    {
        return $this->content['industries'];
    }

    public function gallery(): array
    {
        return $this->content['gallery'];
    }

    public function testimonials(): array
    {
        return $this->content['testimonials'];
    }

    public function blogs(): array
    {
        return $this->content['blogs'];
    }

    public function blog(string $slug): ?array
    {
        foreach ($this->content['blogs'] as $blog) {
            if ($blog['slug'] === $slug) {
                return $blog;
            }
        }

        return null;
    }

    public function faqs(string $scope = 'home'): array
    {
        return $this->content['faqs'][$scope] ?? $this->content['faqs']['home'];
    }

    public function stats(): array
    {
        return $this->content['stats'];
    }

    public function heroSlides(): array
    {
        return $this->content['hero_slides'];
    }

    public function seo(string $key): array
    {
        return $this->content['seo'][$key] ?? $this->content['seo']['home'];
    }

    public function routeLinks(): array
    {
        $routes = [
            '' => 'Home',
            'about-us' => 'About Us',
            'services' => 'Services',
            'gallery' => 'Gallery',
            'blog' => 'Blog',
            'contact-us' => 'Contact Us',
        ];

        foreach ($this->servicePages() as $slug => $service) {
            $routes[$slug] = $service['title'];
        }

        foreach ($this->locationPages() as $slug => $page) {
            $routes[$slug] = $page['title'];
        }

        return $routes;
    }
}

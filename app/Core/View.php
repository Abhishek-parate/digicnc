<?php

declare(strict_types=1);

namespace App\Core;

final class View
{
    public function render(string $view, array $params = [], string $layout = 'layout'): void
    {
        $content = $this->capture($view, $params);
        extract($params, EXTR_SKIP);
        require BASE_PATH . '/app/Views/' . $layout . '.php';
    }

    public function partial(string $view, array $params = []): void
    {
        echo $this->capture($view, $params);
    }

    private function capture(string $view, array $params): string
    {
        extract($params, EXTR_SKIP);
        ob_start();
        require BASE_PATH . '/app/Views/' . $view . '.php';
        return (string) ob_get_clean();
    }
}

<?php

declare(strict_types=1);

namespace App\Core;

final class Router
{
    private array $routes = [];
    private $fallback;

    public function get(string $pattern, callable|array $handler): void
    {
        $this->add('GET', $pattern, $handler);
    }

    public function post(string $pattern, callable|array $handler): void
    {
        $this->add('POST', $pattern, $handler);
    }

    public function fallback(callable|array $handler): void
    {
        $this->fallback = $handler;
    }

    private function add(string $method, string $pattern, callable|array $handler): void
    {
        $pattern = '/' . trim($pattern, '/');
        $pattern = $pattern === '/' ? '/' : rtrim($pattern, '/');
        $this->routes[$method][] = [$pattern, $handler];
    }

    public function dispatch(string $method, string $path): mixed
    {
        $path = '/' . trim($path, '/');
        $path = $path === '/' ? '/' : rtrim($path, '/');

        foreach ($this->routes[$method] ?? [] as [$pattern, $handler]) {
            $params = $this->match($pattern, $path);
            if ($params !== null) {
                return $this->call($handler, $params);
            }
        }

        if ($this->fallback) {
            return $this->call($this->fallback, []);
        }

        http_response_code(404);
        echo 'Not found';
        return null;
    }

    private function match(string $pattern, string $path): ?array
    {
        $keys = [];
        $regex = preg_replace_callback('/\{([a-zA-Z_][a-zA-Z0-9_]*)\}/', function (array $match) use (&$keys) {
            $keys[] = $match[1];
            return '__PARAM__';
        }, $pattern);

        $regex = str_replace('__PARAM__', '([^/]+)', preg_quote((string) $regex, '#'));
        $regex = str_replace(preg_quote('__PARAM__', '#'), '([^/]+)', $regex);
        if (!preg_match('#^' . $regex . '$#', $path, $matches)) {
            return null;
        }

        array_shift($matches);
        return array_combine($keys, array_map('urldecode', $matches)) ?: [];
    }

    private function call(callable|array $handler, array $params): mixed
    {
        return call_user_func_array($handler, $params);
    }
}

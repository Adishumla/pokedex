<?php

declare(strict_types=1);

namespace App;

use Exception;
use App\Exceptions\NotFoundHttpException;

class Router
{

    private $routes = [];

    public function __construct($routes)
    {
        $this->routes = $routes;
    }

    public function direct(string $uri): string
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }

        throw new NotFoundHttpException();
    }
}

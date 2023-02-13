<?php

require __DIR__ . '/vendor/autoload.php';
//require __DIR__ . '/src/NotFoundHttpException.php';

use App\Database\Connection;
use App\Database\QueryBuilder;
use App\Router;
use App\Request;
use App\Exceptions\NotFoundHttpException;

$database = new QueryBuilder(
    Connection::make('mysql', '127.0.0.1', 'pokemon', 'root', '')
);

echo "<br>";

$routers = new Router([
    '/' => __DIR__ . '/controllers/pokedex.php',
    '/pokemons' => __DIR__ . '/controllers/pokedex.php',
    '/pokemon' => __DIR__ . '/controllers/pokemon.php',
]);

try {
    $route = $routers->direct(Request::uri());
    require $route;
} catch (NotFoundHttpException $e) {
    require __DIR__ . '/views/404.view.php';
}

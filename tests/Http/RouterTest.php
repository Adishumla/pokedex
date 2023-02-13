<?php

declare(strict_types=1);


namespace App\Test;

use App\Router;
use PHPUnit\Framework\TestCase;
use App\Exceptions\NotFoundHttpException;

class RouterTest extends TestCase
{
    public function test_route_request()
    {

        $router = new Router(
            [
                'pokemon' => 'PokemonController@index',
            ]
        );

        $this->assertSame('PokemonController@index', $router->direct('pokemon'));
    }

    public function test_route_not_found()
    {
        $this->expectException(NotFoundHttpException::class);

        $router = new Router(
            [
                'porkemon' => 'PokemonController@index',
            ]
        );

        $router->direct('porkemon\index');
    }
}

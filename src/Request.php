<?php

declare(strict_types=1);

namespace App;


class Request
{
    public static function uri()
    {

        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}

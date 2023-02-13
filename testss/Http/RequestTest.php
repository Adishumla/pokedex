<?php

declare(strict_types=1);

namespace App\Test;

use App\Request;
use PHPUnit\Framework\TestCase;

class RequestTest extends TestCase
{
    public function test_request_uri()
    {
        $_SERVER['REQUEST_URI'] = '/pokemon/1';

        $this->assertSame('/pokemon/1', Request::uri());
    }
}

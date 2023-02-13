<?php

declare(strict_types=1);

namespace App\Exceptions;

use Exception;

class NotFoundHttpException extends Exception
{
    public function __construct()
    {
        parent::__construct('Not Found', 404);
    }
}

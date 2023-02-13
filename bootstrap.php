<?php

declare(strict_types=1);

require __DIR__ . "/vendor/autoload.php";

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/.env');

// you can also load several files
$dotenv->load(__DIR__ . '/.env', __DIR__ . '/.env.dev');

// overwrites existing env variables
$dotenv->overload(__DIR__ . '/.env');

// loads .env, .env.local, and .env.$APP_ENV.local or .env.$APP_ENV
$dotenv->loadEnv(__DIR__ . '/.env');

use App\Database\QueryBuilder;
use App\Database\Connection;

$config = require __DIR__ . "/config.php";

$database = Connection::make($config['driver'], $config['host'], $config['database'], $config['username'], $config['password']);

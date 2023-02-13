<?php

declare(strict_types=1);


use App\Database\Connection;
use App\Database\QueryBuilder;

use App\Pokemon;

$pokemon = new Pokemon();
$pokemon->id = $_GET['id'];
$pokemon->name = $pokemon->getPokemonName();
$imageUrl = $pokemon->getImageUrl();

require __DIR__ . '/../views/pokemon.view.php';

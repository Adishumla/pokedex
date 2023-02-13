<?php

declare(strict_types=1);


use App\Database\Connection;
use App\Database\QueryBuilder;
use App\Pokemon;


$pokemons = new Pokemon();
$pokemons = $pokemons->getAllPokemonNames();
require __DIR__ . '/../views/pokedex.view.php';

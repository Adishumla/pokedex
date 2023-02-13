<?php

declare(strict_types=1);

namespace App;

use App\Database\Connection;
use App\Database\QueryBuilder;

class Pokemon
{
    public $id;
    public $name;



    public function getPokemonName()

    {

        $database = new QueryBuilder(
            Connection::make('mysql', '127.0.0.1', 'pokemon', 'root', '')
        );

        $pokemon = $database->select()->from('pokemon')->where('id', '=', $this->id)->first();

        return $pokemon->name;
    }

    public function getAllPokemonNames()
    {
        $database = new QueryBuilder(
            Connection::make('mysql', '127.0.0.1', 'pokemon', 'root', '')
        );

        $pokemons = $database->select()->from('pokemon')->get();

        return $pokemons;
    }

    public function getImageUrl()
    {
        $name = $this->getPokemonName();

        $url = "https://img.pokemondb.net/sprites/bank/normal/";

        $url .= strtolower($name) . ".png";

        return $url;
    }
}

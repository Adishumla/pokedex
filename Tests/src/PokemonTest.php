<?php

declare(strict_types=1);

namespace App\Test;

use App\Pokemon;
use App\Support\Str;
use PHPUnit\Framework\TestCase;

class PokemonTest extends TestCase
{
    public function test_create_pokemon()
    {
        $testPokemon = new Pokemon();
        $testPokemon->id = 1;
        $testPokemon->name = 'charizard';

        function getImageUrl()
        {
            $name = 'charizard';

            $url = "https://img.pokemondb.net/sprites/bank/normal/";

            $url .= strtolower($name) . ".png";

            return $url;
        }



        $this->assertSame(1, $testPokemon->id);
        $this->assertSame('charizard', $testPokemon->name);
        $this->assertSame('https://img.pokemondb.net/sprites/bank/normal/charizard.png', getImageUrl());
    }
}

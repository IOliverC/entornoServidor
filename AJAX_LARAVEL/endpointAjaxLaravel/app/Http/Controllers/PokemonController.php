<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PokemonController extends Controller
{
    public function getPokemon(){
        $response = Http::get('https://pokeapi.co/api/v2/pokemon/1'); //estoy obteniendo un método para información de Pokemon desde API externa
        $pokemonData = $response->json();

        return response()->json($pokemonData);
    }
}

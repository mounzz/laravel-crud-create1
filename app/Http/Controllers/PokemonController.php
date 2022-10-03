<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{


    public function store(Request $request){
        $pokemon = New Pokemon;
        $pokemon->nom = $request->nom;
        $pokemon->type = $request->type;
        $pokemon->niveau = $request->niveau;
        $pokemon->save();
        return redirect('/');
    }

    public function Welcome(){
        $poke = Pokemon::all();
        return view('welcome', compact('poke'));

    }
}


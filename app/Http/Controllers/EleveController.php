<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EleveController extends Controller
{
    /**
     * Store a new eleve in the database.
     */
    public function store(Request $request): RedirectResponse
    {
        Eleve::create([
        'nom' =>$request->nom,

        'premom' =>$request->premom,

        'dateNaissance' =>$request->dateNaissance,

        'numeroEtuidiant' =>$request->numeroEtuidiant,
 
        'email' => $request->email,

        'image' => $request->image
        ]);
        return redirect('/eleves');
    }

    public function create(){
        return view('eleves.create');
    }
}






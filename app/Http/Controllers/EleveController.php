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
        // Validate the request...
 
        $eleve = new Eleve;
 
        $eleve->nom = $request->nom;

        $eleve->premom = $request->premom;

        $eleve->dateNaissance = $request->dateNaissance;

        $eleve->numeroEtuidiant = $request->numeroEtuidiant;
 
        $eleve->email = $request->email;

        $eleve->email = $request->email;

        $eleve->image = $request->image;

        $eleve->save();
 
        return redirect('/eleve');
    }
}

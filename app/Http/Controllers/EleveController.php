<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Eleve;
use Illuminate\Support\Facades\Validator; 

class EleveController extends Controller
{
    /**
     * Store a new eleve in the database.
     */
    public function store(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:eleves,email'
            ]);
        if ($validator->fails()) {
            return redirect() ->back() ->withErrors($validator) ->withInput();
        }
        Eleve::create([
        'nom' => $request->nom,

        'prenom' => $request->prenom,

        'dateNaissance' => $request->dateNaissance,

        'numeroEtudiant' => $request->numeroEtudiant,
 
        'email' => $request->email,

        'image' => $request->image
        ]);
        return redirect('/eleves');
    }
    
    public function create(){
        return view('eleves.create');
    }
    
}






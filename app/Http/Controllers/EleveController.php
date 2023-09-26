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
    public function index(){
        $results = Eleve::paginate(10);
        return view('eleves.all')->with('results',$results);
    }
    public function create(){
        return view('eleves.create');
    }

    public function destroy($id){

        Eleve::destroy($id);
        return redirect('/eleves');
        
    }
    public function edit($id){
        $eleve = Eleve::find($id);
        return view('eleves.edit')->with('eleve',$eleve);
    }

    
    public function update(Request $request, $id): RedirectResponse
    {
        $eleve = Eleve::find($id);
        $rules = [
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'dateNaissance' => 'required|date',
            'numeroEtudiant' => 'required|string|max:255',
            'email' => 'required|email',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ];

        $imagePath = $request->file('image')->store('images', 'public');
   
        
        $validatedData = $request->validate($rules);
        $validatedData["image"] = $imagePath;
        
       

        $eleve->update($validatedData);

        return redirect('/eleves');
    }

    public function show($id){
        $eleve = Eleve::find($id);
        return view('eleves.show')->with('eleve',$eleve);
    }
    
}






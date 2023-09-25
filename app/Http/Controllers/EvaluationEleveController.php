<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EvaluationEleve;
use App\Http\Controllers\Controller;

class EvaluationEleveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $results = EvaluationEleve::paginate(10);
        return view('evaluation_eleves.all')->with('results', $results);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('evaluation_eleves.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'note' => 'required|numeric',
            'evaluation_id'=> 'required|string',
            'eleve_id'=> 'required|string'
        ];

        $validatedData = $request->validate($rules);

        EvaluationEleve::create($validatedData);
        
        return redirect('/evaluation_eleves');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $evaluation_eleve = EvaluationEleve::find($id);
        return view('evaluation_eleves.show')->with('evaluation_eleves', $evaluation_eleve);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $evaluation_eleve = EvaluationEleve::find($id);
        return view('evaluation_eleves.edit')->with('evaluation_eleves', $evaluation_eleve);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $evaluation_eleve = EvaluationEleve::find($id);

        $rules = [
            'note' => 'required|numeric',
            'evaluation_id'=> 'required|string',
            'eleve_id'=> 'required|string'
        ];

        $validatedData = $request->validate($rules);

        $evaluation_eleve->update($validatedData);
        
        return redirect('/evaluation_eleves');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        EvaluationEleve::destroy($id);
        return redirect('/evaluation_eleves');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
use App\Models\Module;
use App\Models\Evaluation;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator; 


class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $results = Evaluation::paginate(10);
        return view('evaluations.all')->with('results', $results);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('evaluations.create');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $rules = [
            'date' => 'required|date',
            'titre' => 'required|string',
            'coefficient' => 'required|numeric',
            'module_id'=> 'required|string'
        ];

        $validatedData = $request->validate($rules);

        Evaluation::create($validatedData);
        
        return redirect('/evaluations');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $evaluation = Evaluation::find($id);

        return view('evaluations.show')->with('evaluation', $evaluation);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $evaluation = Evaluation::find($id);

        return view('evaluations.edit')->with('evaluation', $evaluation);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        if (! Gate::allows('update-evaluation', auth()->user())) {
            abort(403);
        }
        $evaluation = Evaluation::find($id);

        $rules = [
            'date' => 'required',
            'titre' => 'required|string',
            'coefficient' => 'required|numeric'
        ];

        $validateData = $request->validate($rules);

        $evaluation->update($validateData);

        return redirect('/evaluations');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Evaluation::destroy($id);

        return redirect('/evaluations');


    }
}

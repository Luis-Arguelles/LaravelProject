<?php

namespace App\Http\Controllers;
use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ModuleController extends Controller
{
    
    /**
     * Store a new module in the database.
     */
    public function store(Request $request): RedirectResponse
    {
    
        Module::create([
        'code' => $request->code,

        'nom' => $request->nom,

        'coefficient' => $request->coefficient
        ]);
        return redirect('/modules');
    }
    public function index(){
        $results = Module::paginate(10);
        return view('modules.all')->with('results',$results);
    }
    public function create(){
        return view('modules.create');
    }

    public function destroy($id){

        Module::destroy($id);
        return redirect('/modules');
        
    }
    public function edit($id){
        $module = Module::find($id);
        return view('modules.edit')->with('module',$module);
    }
    public function update(Request $request, $id): RedirectResponse
    {
        $module = Module::find($id);
        $rules = [
            'nom' => 'required|string|max:255',
            'code' => 'required|string|max:255',
            'coefficient' => 'required|float'
        ];

        // Perform validation
        $validatedData = $request->validate($rules);

        // Update the student's data
        $module->update($validatedData);

        return redirect('/modules');
    }

    public function show($id){
        $module = Module::find($id);
        return view('modules.show')->with('module',$module);
    }

}

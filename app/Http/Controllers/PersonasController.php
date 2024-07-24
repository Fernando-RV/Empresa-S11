<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonasController extends Controller
{
    public function index()
    {
        $personas = Personas::get();
        return view('personas', compact('personas'));
    }

    public function show($nPerCodigo){
        return view('show',[
            'persona' => Personas::find($nPerCodigo)
        ]);
    }
    
    public function create()
    {
        return view('create');
    }

    public function store(CreatePersonaRequest $request){

        Personas::create($request->validated());
 
        return redirect()->route('personas.index')->with('estado','La persona fue creada correctamente');
     }



    public function edit(string $id)
    {
        return view('edit', [
            'personas' => $personas,
        ]);
    }

    public function update(Request $request, string $id)
    {
        $personas->update($request->validated());
        return redirect()->route('personas.show', $personas)->with('estado','La persona fue actualizada correctamente');
    }

    public function destroy(string $id)
    {
        $persona->delete();
        return redirect()->route('personas.index')->with('estado','La persona fue eliminada correctamente');
    }
}

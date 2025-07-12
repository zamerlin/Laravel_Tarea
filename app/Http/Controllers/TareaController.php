<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use App\Http\Requests\StoreTareaRequest;
use App\Http\Requests\UpdateTareaRequest;
use Illuminate\Http\Request;

class TareaController extends Controller
{

    public function index()
    {
        $tareas = Tarea::all();
        return view ('tareas.index', compact('tareas'));
    }


    public function create()
    {
        return view ('tareas.create');
    }


    public function store(StoreTareaRequest $request)
    {
        $request->validate(['nombre' => 'required|string|max:255',]);

        Tarea::create(['nombre' => $request->nombre,]);
        
        return redirect()->route('tareas.index')->with('success', 'Tarea creada exitosamente.');
    }

    public function show(Tarea $tarea)
    {
        return view('tareas.show', compact('tarea'));
    }

    public function edit(Tarea $tarea)
    {
        return view('tareas.edit',compact('tarea'));
    }

    public function update(UpdateTareaRequest $request, Tarea $tarea)
    {
        $request->validate(['nombre' => 'required|string|max:255',]);

        $tarea->update(['nombre' => $request->nombre,]);

        return redirect()->route('tareas.index')->with('success','Tarea Actualizada Exitosamente.');
    }

    public function destroy(Tarea $tarea)
    {
        $tarea->delete();
        return redirect()->route('tareas.index')
        ->with('success','Tarea Eliminada Exitosamente.');
    }
}

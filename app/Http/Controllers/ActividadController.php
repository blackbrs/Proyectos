<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use App\Http\Requests\StoreActividadRequest;
use App\Http\Requests\UpdateActividadRequest;

class ActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividades = Actividad::paginate(15);
        return view('actividades.index', compact('actividades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actividades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreActividadRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreActividadRequest $request)
    {
        $actividad = Actividad::create($request->validated());
        return redirect()->route('actividad.index')->with('message', 'Actividad'.$actividad->descripcion.' creada correctamente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function edit(Actividad $actividad)
    {
        return view('actividades.edit', compact('actividad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateActividadRequest  $request
     * @param  \App\Models\Actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateActividadRequest $request, Actividad $actividad)
    {
        $actividad->update($request->validated());
        return redirect()->route('actividad.index')->with('message', 'Actividad: '.$actividad->descripcion.'  actualizada correctamente:  ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actividad $actividad)
    {
        //
    }
}

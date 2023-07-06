<?php

namespace App\Http\Controllers;

use App\Models\Duenio;
use Illuminate\Http\Request;

class DuenioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $duenios = Duenio::All();
        return view('duenios.ver_duenios', compact('duenios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('duenios.crear_duenio');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $duenio = new Duenio();
        $duenio->nombre = $request->input('nombre');
        $duenio->apellido = $request->input('apellido');
        $duenio->correo = $request->input('correo');

        $duenio->save();
        return redirect(route('duenios.ver'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Duenio  $duenio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $duenio = Duenio::find($id);
        return view('duenios.mostrar_duenio', compact('duenio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Duenio  $duenio
     * @return \Illuminate\Http\Response
     */
    public function edit(Duenio $duenio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Duenio  $duenio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Duenio $duenio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Duenio  $duenio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Duenio $duenio)
    {
        //
    }
}

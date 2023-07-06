<?php

namespace App\Http\Controllers;

use App\Models\Apartamento;
use Illuminate\Http\Request;

class ApartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apartamento  $apartamento
     * @return \Illuminate\Http\Response
     */
    public function show(Apartamento $apartamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apartamento  $apartamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Apartamento $apartamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Apartamento  $apartamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apartamento $apartamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apartamento  $apartamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apartamento $apartamento)
    {
        //
    }

    /**
     * Calcular el precio de un apartamento.
     */
    public function calcularPrecio($area, $piso = 1){

        if($piso >= 1 && $piso <= 12){
            $precio_por_metro_2 = 1500;

            for ($i=0; $i < $piso; $i++) { 
                if ($i == 0){
                    continue;
                }

                $precio_por_metro_2 += (0.1 / 100) * $precio_por_metro_2;
            }
            
            $total = $area * $precio_por_metro_2;

        }else{
            $total = 0;
        }
        
        return view('precio', compact('total', 'piso'));
    }
}

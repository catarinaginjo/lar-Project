<?php

namespace App\Http\Controllers;

use App\Models\Recados;
use Illuminate\Http\Request;

class RecadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('info.recados.recados');
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
     * @param  \App\Models\Recados  $recados
     * @return \Illuminate\Http\Response
     */
    public function show(Recados $recados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recados  $recados
     * @return \Illuminate\Http\Response
     */
    public function edit(Recados $recados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recados  $recados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recados $recados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recados  $recados
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recados $recados)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\controlo_mp;
use Illuminate\Http\Request;

class ControloMpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('produtos.materias-primas.controlomp');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produtos.materias-primas.create_mp');
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\controlo_mp  $controlo_mp
     * @return \Illuminate\Http\Response
     */
    public function edit(controlo_mp $controlo_mp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\controlo_mp  $controlo_mp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, controlo_mp $controlo_mp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\controlo_mp  $controlo_mp
     * @return \Illuminate\Http\Response
     */
    public function destroy(controlo_mp $controlo_mp)
    {
        $controlo_mp->delete();
        return view('');
    }
}

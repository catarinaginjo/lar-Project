<?php

namespace App\Http\Controllers\API;
use App\Models\stock_movimentos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StockMovimentosApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(['result' => stock_movimentos::all()], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'quantidade' => 'required|numeric',
            'product_id' => 'string'
        ]);
        $params = $request->all();

        $params['user_id'] =  Auth::user()->id;

        //dd($params);
        $movimento = stock_movimentos::create($params);
        $movimento->save();

        return response(200);
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     *@param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

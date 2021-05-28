<?php

namespace App\Http\Controllers\API;

use App\Models\ementa;
use Illuminate\Http\Request;

class EmentaApiController extends Controller
{
    public function index()
    {
        return response(['result' => ementa::all()], 200);
    }

}

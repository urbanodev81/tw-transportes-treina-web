<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Frete;

class RastreamentoController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $fretes = Frete::where('id', 1)->first();
        return view('frete.rastreamento',['fretes'=>$fretes]);
    }
}

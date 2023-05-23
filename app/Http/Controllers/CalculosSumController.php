<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculosSumController extends Controller
{
    function calcularSuma(Request $request){
        $request->validate([
            'n1' => 'required|numeric|min:1|max:20',
            'n2' => 'required|numeric|min:1|max:20',
        ]);
        $n1 = intval($request->n1);
        $n2 = intval($request->n2);
        $sum = $n1 + $n2;

        return view('vistaSuma', compact('n1','n2', 'sum'));
    }
}

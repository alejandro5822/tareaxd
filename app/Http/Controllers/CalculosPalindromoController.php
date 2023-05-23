<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculosPalindromoController extends Controller
{
    function verificarPalindromo(Request $request){
        $request->validate([
            'texto' => 'required',
        ]);
        $texto = $request->texto;
        $se = str_replace("", "", $texto);
        $lower = strtolower($se);
        $inv = strrev($lower);
        $res = $lower == $inv ? "ES" : "NO es";
        return view('vistaPalindromo', compact('texto','res'));
    }
} 
?>
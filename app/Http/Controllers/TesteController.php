<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    //
    function teste(int $p1, int $p2){
        //echo 'A soma de P1 + P2 é '.($p1+$p2);
        //return view('site.teste', ['p1' => $p1, 'p2' => $p2]); //Array associativo

        //return view('site.teste', compact('p1','p2'));  // Método COMPACT()

        return view('site.teste') -> with('p1',$p1) -> with('p2', $p2); //Método With
    }
}

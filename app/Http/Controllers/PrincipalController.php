<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    function principal(){
        return view('site.principal', ['titulo' => 'Home']);
    }

    function sobrenos(){
        return view('site.sobrenos',  ['titulo' => 'Sobre Nós']);
    }
}

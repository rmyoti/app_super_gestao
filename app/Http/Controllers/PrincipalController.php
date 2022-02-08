<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    function principal(){
        return view('site.principal');
    }
    
    function contato(){
        return view('site.contato');
    }

    function sobrenos(){
        return view('site.sobrenos');
    }
}

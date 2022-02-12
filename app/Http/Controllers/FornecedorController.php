<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    //
    public function index(){
        //$indice = 2;
        $fornecedores = [
            0 => [  'nome' => 'Fornecedor 0', 
                    'status' => 'N',
                    'cnpj' => '00.000.000/0001-00' ,
                    'ddd' => '85',  // ceara
                    'telefone'=> '998788585'
        ],
            1 => [  'nome' => 'Fornecedor 1', 
                    'status' => 'S',
                    'cnpj'=> null,
                    'ddd' => '22', //Rio de Janeiro
                    'telefone'=> '998782121'             
        ],
            2 => [  'nome' => 'Fornecedor 2', 
                    'status' => 'S',
                    'cnpj'=> null,
                    'ddd' => '11',  //Sao Paulo
                    'telefone'=> '998781111'             
        ],
            3 => [  'nome' => 'Fornecedor 3', 
                    'status' => 'S',
                    'cnpj'=> null,
                    'ddd' => '31',  //Minas Gerais
                    'telefone'=> '998781111'             
    ]
    ];

        //Operador ternário: condicao ? se verdadeiro: se falso;

        //echo isset($fornecedores[0]['cnpj']) ? 'cnpj informado': 'cnpj nao informado';

        return view('app.fornecedores.index',compact('fornecedores'));
      // return view('app.fornecedores.index');  // foi usado para teste do isset
    }
}

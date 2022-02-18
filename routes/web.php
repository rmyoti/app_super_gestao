<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.principal');

Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');

Route::get('/sobrenos',  [\App\Http\Controllers\PrincipalController::class, 'sobrenos'])->name('site.sobrenos');

Route::get('/login',  function(){ return 'login';})->name('site.login');

Route::prefix('/app')->group(function(){
    Route::get('/fornecedores', [\App\Http\Controllers\FornecedorController::class, 'index'])->name('app.fornecedores');
    Route::get('/clientes',  function(){ return 'clientes';})->name('app.clientes');
    Route::get('/produtos',  function(){ return 'produtos';})->name('app.produtos');
                                        }
                            );







// Route::get('/contato/{nome}/{categoria_id}',  
//             function(
//                      string $nome, 
//                      int $categoria_id = 1, 
//                     ){
//                         echo 'Estamos aqui '.$nome.' - '.$categoria_id;
//                         }
// ) -> where('categoria_id','[0-9]+')-> where('nome','[A-Za-z]+');   //Aqui foi definido uma expressao regular para tratar o tipo de categoria_id na chamada, se for enviado algo diferente de numero irá retornar 404.


// Route::get('/rota1',  function()
//     {
//      echo 'Rota1';
//     })->name('site.rota1');

// Route::get('/teste/{p1}/{p2}',[\App\Http\Controllers\TesteController::class, 'teste'])->name('teste');

// Route::fallback(function(){
//     echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui </a>para ir para a página Inicial';
// });



//Este código faz o redirecionamento da rota2 para a rota1  

// Route::get('/rota2',  function()
//     {
//     return redirect()->route('site.rota1');
//     })->name('site.rota2');

//Route::redirect('/rota2', '/rota1');




//Os parametros opcionais devem ser utilizados da direita para a esquerda (do ultimo para o primeiro), 
//do contrário dará erro

// Route::get('/contato/{nome}/{categoria}/{assunto}/{mensagem?}',  
//             function(
//                      string $nome, 
//                      string $categoria, 
//                      string $assunto, 
//                      string $mensagem = 'opcional por utilizar o ?'){

//                 echo 'Estamos aqui '.$nome.' - '.$categoria.' - '.$assunto.' - '.$mensagem;
// });
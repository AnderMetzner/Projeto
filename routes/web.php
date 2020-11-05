<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });



Route::get('/logincadastro', function () {
    return view('logincadastro');
});

Route::get('noticia/{id}',[HomeController::class, 'loadNoticia']);

Route::post('chamaFuncao', [HomeController::class, 'funcao']);

Route::post('noticiascadastro', [Homecontroller::class, 'noticiascadastro']);

Route::get('/', [HomeController::class, 'loadHome']);

Route::get('noticias', [HomeController::class, 'loadNoticias']);

Route::get('jogos', [HomeController::class, 'noticiaJogos']);

// Route::post('jogos', [HomeController::class, 'Noticia_jogo']);

Route::post('cadastrojogo', [HomeController::class, 'cadastroJogos']);
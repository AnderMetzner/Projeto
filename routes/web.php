<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\CheckLogin;

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


Route::post('chamaFuncao', [HomeController::class, 'funcao']);
Route::get('/', [HomeController::class, 'loadHome']);

Route::post('cadastrojogo', [HomeController::class, 'cadastroJogos']);
Route::get('jogos', [HomeController::class, 'noticiaJogos']);
Route::get('jogo/{id}', [HomeController::class, 'noticiaJogo']);
Route::post('updateJogo', [HomeController::class, 'updateJogo']);

Route::post('checklogin', [HomeController::class, 'checklogin']);

Route::middleware([CheckLogin::class])->group(function () {
    Route::post('noticiascadastro', [Homecontroller::class, 'noticiascadastro']);
    Route::get('noticia/{id}',[HomeController::class, 'loadNoticia']);
    Route::get('noticias', [HomeController::class, 'loadNoticias']);
    Route::post('updateNoticia', [HomeController::class, 'updateNoticia']);
});

Route::get('sair', [HomeController::class, 'sair']);

Route::get('id', [HomeController::class, 'id']);
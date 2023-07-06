<?php

use App\Http\Controllers\JogosController;
use Illuminate\Support\Facades\Route;

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
route::get('/jogos', [JogosController::class, 'index'])->name('jogos');

Route::get('/', function () {
    return view('welcome');
});

route::get('/cadastro',function(){
    return view('cadastro');
});

route::post('/cadastro', [JogosController::class, 'create'])->name('jogo.criar');


route::get('{id}/edit', [JogosController::class, 'edit'])->name('jogos-edit');

route::put('{id}', [JogosController::class, 'update'])->name('jogos-update');
route::delete('/{id}', [JogosController::class, 'destroy'])->name('jogos-destroy');

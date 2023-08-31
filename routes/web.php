<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// GETS
Route::get('/produto', [ProdutoController::class, 'index'])->name('produto.index');
Route::get('/produto/criar', [ProdutoController::class, 'criar'])->name('produto.criar');

// POSTS
Route::post('/produto/salvar', [ProdutoController::class, 'salvar'])->name('produto.salvar');
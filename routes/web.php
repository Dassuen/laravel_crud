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
Route::get('/produto/{produto}/editar', [ProdutoController::class, 'editar'])->name('produto.editar');

// POSTS
Route::post('/produto/salvar', [ProdutoController::class, 'salvar'])->name('produto.salvar');

// PUT
Route::put('/produto/{produto}/atualizar', [ProdutoController::class, 'atualizar'])->name('produto.atualizar');

// DELETE
Route::delete('/produto/{produto}/deletar', [ProdutoController::class, 'deletar'])->name('produto.deletar');
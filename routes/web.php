<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/home', function () {
    return view('welcome');
});

// Rota para a página inicial
Route::get('/', [ProductController::class, 'index'])->name('products.index');

// Rota para criar um novo produto
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

// Rota para armazenar um novo produto
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

// Rota para exibir um produto específico
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

// Rota para editar um produto
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');

// Rota para atualizar um produto
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');

// Rota para deletar um produto
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

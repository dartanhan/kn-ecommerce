<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;

// 1. Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// 2. Catálogo, Categorias e Busca
Route::get('/produtos', [CatalogController::class, 'index'])->name('catalog.index');
Route::get('/c/{slug}', [CatalogController::class, 'category'])->name('category.show');
Route::get('/busca', [CatalogController::class, 'search'])->name('search');

// 3. Página de Produto (PDP)
Route::get('/produto/{slugWithId}', [ProductController::class, 'show'])->name('product.show');

// 4. Carrinho
Route::get('/carrinho', [CartController::class, 'index'])->name('cart.index');

// 5. Checkout Visual
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');

// 6. Autenticação Visual
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/cadastro', [AuthController::class, 'register'])->name('register');
Route::get('/recuperar-senha', [AuthController::class, 'forgotPassword'])->name('password.request');

// 7. Pedido Concluído e Acompanhamento
Route::get('/pedido/concluido', [OrderController::class, 'completed'])->name('order.completed');
Route::get('/pedido/acompanhamento', [OrderController::class, 'tracking'])->name('order.tracking');

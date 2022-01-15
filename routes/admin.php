<?php

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

Route::get('/dashboard', \App\Http\Livewire\Admin\Dashboard\Index::class)->name('dashboard');

Route::get('/categories', \App\Http\Livewire\Admin\Category\Index::class)->name('categories.index');

Route::get('/categories/update/{category}', \App\Http\Livewire\Admin\Category\Update::class)->name('categories.update');

Route::get('/logs', \App\Http\Livewire\Admin\Log\Index::class)->name('logs.index');

Route::get('/products', \App\Http\Livewire\Admin\Product\Index::class)->name('products.index');

Route::get('/products/create', \App\Http\Livewire\Admin\Product\Create::class)->name('products.store');

Route::get('/products/update/{product}', \App\Http\Livewire\Admin\Product\Update::class)->name('products.update');

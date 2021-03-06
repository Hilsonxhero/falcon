<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| dashboard
|--------------------------------------------------------------------------
 */

Route::get('/dashboard', \App\Http\Livewire\Admin\Dashboard\Index::class)->name('dashboard');

/*
|--------------------------------------------------------------------------
| categories
|--------------------------------------------------------------------------
 */

Route::get('/categories', \App\Http\Livewire\Admin\Category\Index::class)->name('categories.index');

Route::get('/categories/update/{category}', \App\Http\Livewire\Admin\Category\Update::class)->name('categories.update');

Route::get('/logs', \App\Http\Livewire\Admin\Log\Index::class)->name('logs.index');


/*
|--------------------------------------------------------------------------
| products
|--------------------------------------------------------------------------
 */
Route::get('/products', \App\Http\Livewire\Admin\Product\Index::class)->name('products.index');

Route::get('/products/create', \App\Http\Livewire\Admin\Product\Create::class)->name('products.store');

Route::get('/products/update/{product}', \App\Http\Livewire\Admin\Product\Update::class)->name('products.update');


/*
|--------------------------------------------------------------------------
| brands
|--------------------------------------------------------------------------
 */

Route::get('/brands', \App\Http\Livewire\Admin\Brand\Index::class)->name('brands.index');

Route::get('/brands/create', \App\Http\Livewire\Admin\Brand\Create::class)->name('brands.store');

Route::get('/brands/update/{brand}', \App\Http\Livewire\Admin\Brand\Update::class)->name('brands.update');


/*
|--------------------------------------------------------------------------
| shipments
|--------------------------------------------------------------------------
 */

Route::get('/shipments', \App\Http\Livewire\Admin\Shipment\Index::class)->name('shipments.index');

Route::get('/shipments/create', \App\Http\Livewire\Admin\Shipment\Create::class)->name('shipments.store');

Route::get('/shipments/update/{shipment}', \App\Http\Livewire\Admin\Shipment\Update::class)->name('shipments.update');




/*
|--------------------------------------------------------------------------
| guarantees
|--------------------------------------------------------------------------
 */

Route::get('/guarantees', \App\Http\Livewire\Admin\Guarantee\Index::class)->name('guarantees.index');

Route::get('/guarantees/create', \App\Http\Livewire\Admin\Guarantee\Create::class)->name('guarantees.store');

Route::get('/guarantees/update/{guarantee}', \App\Http\Livewire\Admin\Guarantee\Update::class)->name('guarantees.update');

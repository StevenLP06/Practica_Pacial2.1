<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

// ID EN ORDEN DESCENDENTE
Route::get('/product_sort', [ProductController::class, 'product_sort'])->name('products.product_sort');

// CANTIDAD EN ORDEN ASCENDENTE
Route::get('/product_quantity_asc', [ProductController::class, 'product_quantity_asc'])->name('products.product_quantity_asc');

// NOMBRE EN ORDEN DESCENDENTE
Route::get('/product_alfabetico', [ProductController::class, 'product_alfabetico'])->name('products.product_alfabetico');

// BUSCAR NOMBRE
Route::get('/product_search', [ProductController::class, 'product_search'])->name('products.product_search');

// DEVOLVER MAYOR
Route::get('/product_max', [ProductController::class, 'product_max'])->name('products.product_max');

// DEVOLVER PRODUCTOS POR LA LETRA A
Route::get('/product_letter_a', [ProductController::class, 'product_letter_a'])->name('products.product_letter_a');

// DEVOLVER LA SUMA DE TODOS LOS PRECIOS
Route::get('/product_sum', [ProductController::class, 'product_sum'])->name('products.product_sum');

// RUTA MIDDLEWARE
// Route::get('/update', function(){
//     return 'Funciona';
// })->middleware('updated');


Route::middleware('verify.product')->group(function () {
    Route::put('/products/{id}/update', [ProductController::class, 'update']);
    Route::delete('/products/{id}/delete', [ProductController::class, 'destroy']);
});


// RUTA MIDDLEWARE  
Route::get('/product/{id}', function(){
    return 'Puede seguir';
})->middleware('Price');
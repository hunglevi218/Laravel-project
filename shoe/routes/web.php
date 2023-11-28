<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CartController;



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
// ->middleware('checklogin::class')

Route::get('/contact',[ContactController::class, 'index'])->name('contact');
Route::post('/donecontact', [ContactController::class, 'store']);

Route::get('/cart', [CartController::class,'cartList'])->name('cart')->middleware('checklogin::class');
Route::post('/cart', [CartController::class,'addToCart'])->name('cart.store');
Route::post('/update-cart', [CartController::class,'updateCart'])->name('cart.update');
Route::post('/delete', [CartController::class,'removeCart'])->name('cart.delete');
Route::post('/clear', [CartController::class,'cleaAllCart'])->name('cart.clear');


Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::prefix('/admin')->middleware('checkadmin::class')->group(function(){
    Route::get('/', [ProductsController::class, 'index'])->name('admin');
    Route::get('/create', [ProductsController::class, 'create'])->name('create');
    Route::post('/store', [ProductsController::class, 'store']);
    Route::get('/edit/{id}', [ProductsController::class, 'edit']);
    Route::patch('/update/{id}', [ProductsController::class, 'update']);
    Route::get('/delete/{id}', [ProductsController::class, 'destroy']);
});

Route::prefix('shop')->group(function(){
    Route::get('/', [ShopController::class, 'index'])->name('shop');
    Route::get('/detail/{id}', [ShopController::class, 'show'])->name('detail');
});
Route::get('/search', [ShopController::class, 'search'])->name('search');
Route::get('/filter', [ShopController::class, 'filter'])->name('filter');
Route::post('/confirm', [ShopController::class, 'comment']);
Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
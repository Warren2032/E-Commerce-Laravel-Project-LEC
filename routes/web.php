<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WishController;
use App\Http\Controllers\CartController;
use App\Models\Category;
use App\Models\wish;

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



Route::get('/', function () {
    return redirect()->route('home');
});



Auth::routes();

Route::resource('cart', CartController::class);
Route::get('/cart',[CartController::class,'show'])->name('cart');
Route::post('/cartadd',[CartController::class,'addCart'])->name('addCart');
Route::post('/cartdrop',[CartController::class,'destroyAll'])->name('cartdrop');

Route::resource('wish', WishController::class);
Route::get('/wishlist',[WishController::class,'show'])->name('wishlist');
Route::post('/wishadd',[WishController::class,'addWish'])->name('addWish');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/me', [ProfileController::class, 'me'])->name('profile');
Route::post('/profile', [ProfileController::class, 'update'])->name('profile-update');

Route::get('/detail/{id}', [ItemController::class, 'item'])->name('detail');
Route::get('/{id}', [ItemController::class, 'result'])->name('category');






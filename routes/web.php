<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Models\Category;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/me', [ProfileController::class, 'me'])->name('profile');
Route::post('/profile', [ProfileController::class, 'update'])->name('profile-update');

Route::get('/detail/{id}', [ItemController::class, 'item'])->name('detail');
Route::get('/{id}', [ItemController::class, 'result'])->name('category');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Product\ProductController;

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

Route::prefix('user')->group(function() {
    Route::get('/', [UserController::class, 'index'])->name('user.user');
    Route::get('/addUser', [UserController::class, 'addUser'])->name('user.addUser');
    Route::post('/addUser', [UserController::class, 'handleAddUser'])->name('user.addUser');

});
Route::prefix('product')->group(function() {
    Route::get('/', [ProductController::class, 'index'])->name('product.product');
});
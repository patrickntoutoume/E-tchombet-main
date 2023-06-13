<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProdController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [AppController::class, 'index'])->name('home');
Route::get('panier/{$id}', [AppController::class, 'panier'])->name('panier');
Route::get('contact', [ContactController::class, 'contact'])->name('contact');
Route::post('contactsend', [ContactController::class, 'contactsend'])->name('contactsend');
Route::resource('Category',CategoryController::class);
Route::resource('Product',ProdController::class);



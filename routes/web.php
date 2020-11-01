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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/ListCategories', [App\Http\Controllers\CategoryController::class, 'index'])->name('listCategorie');
Route::get('/CreateCategorie', [App\Http\Controllers\CategoryController::class, 'create'])->name('CreateCategorie');
Route::post('/AddCategorie', [App\Http\Controllers\CategoryController::class, 'store'])->name('AddCategorie');
Route::get('/EditCategorie/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('EditCategorie');
Route::get('/UpdateCategorie/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('UpdateCategorie');
Route::get('/UpdateCategorie/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('UpdateCategorie');
Route::delete('/DeleteCategorie/{id}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('DeleteCategorie');

Route::get('/CreateProduct', [App\Http\Controllers\ProductController::class, 'create'])->name('CreateProduct');
Route::post('/AddProduct', [App\Http\Controllers\ProductController::class, 'store'])->name('AddProduct');
Route::get('/ListProducts', [App\Http\Controllers\ProductController::class, 'index'])->name('ListProducts');

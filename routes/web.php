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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// llamamos al controlador de usuarios para crear uno nuevo
Route::get('/users/create/{id?}' , [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
Route::post('/users' , [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::get('/users/{id}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');
Route::post('/users/{id}' , [App\Http\Controllers\UserController::class, 'update'])->name('users.update');

//profile
Route::get('/users/profile/{id}', [App\Http\Controllers\UserController::class, 'profile'])->name('users.profile');

Route::post('/users/profile', [App\Http\Controllers\UserController::class, 'saveProfile'])->name('save.profile');

Route::post('/product/save', [ProductController::class, 'save'])->name('product.save');



//rutas recomendaciones
//partes del cuerpo
Route::get('/recomendaciones/partes', [App\Http\Controllers\ParteController::class, 'show'])->name('partes.show');
Route::post('/recomendaciones/partes', [App\Http\Controllers\ParteController::class, 'save'])->name('parte.save');

//sintomas
Route::get('/recomendaciones/sintomas', [App\Http\Controllers\SintomaController::class, 'show'])->name('sintomas.show');
Route::post('/recomendaciones/sintomas', [App\Http\Controllers\SintomaController::class, 'save'])->name('sintoma.save');

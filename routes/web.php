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
Route::get('/users/create' , [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
Route::post('/users' , [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::get('/users/{id}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');
Route::post('/users/{id}' , [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
Route::get('/users/profile/{id}', [App\Http\Controllers\UserController::class, 'profile'])->name('users.profile');




//rutas recomendaciones
//partes del cuerpo
Route::get('/recomendaciones/partes', [App\Http\Controllers\ParteController::class, 'show'])->name('partes.show');
Route::post('/recomendaciones/partes', [App\Http\Controllers\ParteController::class, 'save'])->name('parte.save');

//sintomas
Route::get('/recomendaciones/sintomas', [App\Http\Controllers\SintomaController::class, 'show'])->name('sintomas.show');
Route::post('/recomendaciones/sintomas', [App\Http\Controllers\SintomaController::class, 'save'])->name('sintoma.save');

//recomendaciones
Route::get('/recomendaciones', [App\Http\Controllers\RecomendacionController::class, 'index'])->name('recomendacion.index');
Route::get('/recomendaciones/detalles/{id}', [App\Http\Controllers\RecomendacionController::class, 'show'])->name('recomendacion.show');
Route::get('/recomendaciones/form/{id?}', [App\Http\Controllers\RecomendacionController::class, 'form'])->name('recomendacion.form');
Route::post('/recomendaciones' , [App\Http\Controllers\RecomendacionController::class, 'create'])->name('recomendacion.create');
Route::post('/recomendaciones/{id}' , [App\Http\Controllers\RecomendacionController::class, 'update'])->name('recomendacion.update');

Route::post('/profiles' , [App\Http\Controllers\ProfileController::class, 'create'])->name('profile.create');
Route::post('/profiles/{id}' , [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

//Permisos
Route::resource('permissions', App\Http\Controllers\PermissionController::class);

//Roles
Route::resource('roles', App\Http\Controllers\RoleController::class);

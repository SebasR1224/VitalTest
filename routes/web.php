<?php

use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\LaboratorioController;
use App\Mail\ContactanosMailable;
use App\Models\Laboratorio;
use App\Models\Medicamento;
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
Route::get('/users/{id}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}' , [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
Route::post('status-update/{id}', [App\Http\Controllers\UserController::class, 'statusUser'])->name('update.status');

//profile
Route::get('/users/profile/{id}', [App\Http\Controllers\UserController::class, 'profile'])->name('users.profile');
Route::post('/profiles' , [App\Http\Controllers\ProfileController::class, 'create'])->name('profile.create');
Route::post('/profiles/{id}' , [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');




//rutas recomendaciones
//partes del cuerpo
Route::get('/recomendaciones/partes', [App\Http\Controllers\ParteController::class, 'show'])->name('partes.show');
Route::post('/recomendaciones/partes', [App\Http\Controllers\ParteController::class, 'save'])->name('parte.save');

//sintomas
Route::get('/recomendaciones/sintomas', [App\Http\Controllers\SintomaController::class, 'show'])->name('sintomas.show');
Route::post('/recomendaciones/sintomas', [App\Http\Controllers\SintomaController::class, 'save'])->name('sintoma.save');
// Route::delete('/recomendaciones/sintomas/{id}',  [App\Http\Controllers\SintomaController::class, 'destroy'])->name('sintoma.delete');


//recomendaciones
Route::get('/recomendaciones/create', [App\Http\Controllers\RecomendacionController::class, 'create'])->name('recomendacion.create');
Route::post('/recomendaciones' , [App\Http\Controllers\RecomendacionController::class, 'store'])->name('recomendacion.store');
Route::get('/recomendaciones', [App\Http\Controllers\RecomendacionController::class, 'index'])->name('recomendacion.index');
Route::get('/recomendaciones/detalles/{id}', [App\Http\Controllers\RecomendacionController::class, 'show'])->name('recomendacion.show');
Route::get('/recomendaciones/{id}/edit', [App\Http\Controllers\RecomendacionController::class, 'edit'])->name('recomendacion.edit');
Route::put('/recomendaciones/{id}' , [App\Http\Controllers\RecomendacionController::class, 'update'])->name('recomendacion.update');
Route::get('/search/partes',  [App\Http\Controllers\SearchController::class, 'partes'])->name('search.partes');


//laboratorio
Route::get('/laboratorios', [App\Http\Controllers\LaboratorioController::class, 'index'])->name('laboratorios.index');
Route::post('/laboratorios', [App\Http\Controllers\LaboratorioController::class, 'save'])->name('laboratorio.save');

//categoria
Route::get('/categorias', [App\Http\Controllers\CategoriaController::class, 'index'])->name('categorias.index');
Route::post('/categorias', [App\Http\Controllers\CategoriaController::class, 'save'])->name('categoria.save');

//Permisos
Route::resource('permissions', App\Http\Controllers\PermissionController::class);

//Roles
Route::resource('roles', App\Http\Controllers\RoleController::class);

//medicamentos
Route::resource('medicamentos', App\Http\Controllers\MedicamentoController::class);

//commerce
Route::get('/commerce', [App\Http\Controllers\MedicamentoController::class, 'commerce'])->name('medicamento.commerce');


//Formulario de contacto
Route::post('contactanos', [App\Http\Controllers\ContactanosController::class, 'send'])->name('contactanos.send');

// Route::get('contactos', function () {
//     return new ContactanosMailable("Motivo", "mensaje", "nombre", "correo");
// });

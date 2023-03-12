<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaisesController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function(){
    Route::get('test-auth',function(){
        return "Hola mundo con usuario login";
   });
});

Route::get('sin-sesion',function(){
    return "esta vista es publica";
});

Route::get('/iniciopaises', [PaisesController::class, 'indexP'])->name('iniciopaises');
Route::get('/crearpais', [PaisesController::class, 'crearP']);
Route::post('/iniciopaises', [PaisesController::class, 'storeP'])->name('paises_crear');
Route::delete('/iniciopaises/{id}', [PaisesController::class, 'eliminarP'])->name('paises_eliminar');

Route::get('/iniciopaises/{id}/edit', [PaisesController::class, 'editarP'])->name('paises_editar');
Route::put('/iniciopaises/{id}/edit/update', [PaisesController::class, 'updateP'])->name('paises_actualizar');
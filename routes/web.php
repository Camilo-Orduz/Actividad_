<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaisesController;
use App\Http\Controllers\DepartamentosController;
use App\Http\Controllers\MunicipiosController;

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




Route::get('/iniciodepartamentos', [DepartamentosController::class, 'indexD'])->name('inicioDep');
Route::get('/creardepartamento', [DepartamentosController::class, 'crearD']);
Route::post('/iniciodepartamentos', [DepartamentosController::class, 'storeD'])->name('departamentos_crear');
Route::delete('/iniciodepartamentos/{id}', [DepartamentosController::class, 'eliminarD'])->name('departamentos_eliminar');
Route::get('/iniciodepartamentos/{id}/edit', [DepartamentosController::class, 'editarD'])->name('departamentos_editar');
Route::put('/iniciodepartamentos/{id}/edit/update', [DepartamentosController::class, 'updateD'])->name('departamentos_actualizar');




Route::get('/iniciomunicipios', [MunicipiosController::class, 'indexM'])->name('inicioMunicipios');
Route::get('/crearmunicipio', [MunicipiosController::class, 'crearM']);
Route::post('/iniciomunicipios', [MunicipiosController::class, 'storeM'])->name('municipios_crear');
Route::get('/iniciomunicipios/{id}/edit', [MunicipiosController::class, 'editarM'])->name('municipios_editar');
Route::put('/iniciomunicipios/{id}/edit/update', [MunicipiosController::class, 'updateM'])->name('municipios_actualizar');
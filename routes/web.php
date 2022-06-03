<?php

use App\Http\Controllers\AreasController;
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BitacoraController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\DocumentosController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\SolicitudCreditoController;
use App\Http\Controllers\TipoCreditoController;
use App\Http\Controllers\PersonalizarController;


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
Route::post('/logout', [LoginController::class, 'logout'])
        ->name('logout');


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/clientes', function () { return view('clientes.index'); });

// Route::get('/clientes/create',[ClientesController::class,'create']);




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('users/informacion-creditos', function () {
        return view('informacion.info_creditos');
    })->name('info_creditos');

    Route::resource('roles', RolesController::class);
    Route::resource('areas', AreasController::class);
    Route::resource('usuarios', UsuariosController::class);
    Route::resource('clientes',ClientesController::class);

    Route::resource('empleados',EmpleadosController::class);

    Route::get('creditos/{id}/documentos', [SolicitudCreditoController::class, 'documentos'] )->name('credito.documentos'); //index de documentos
    Route::resource('creditos', SolicitudCreditoController::class);
    Route::get('documentos/{id}/descargar', [DocumentosController::class, 'descargar'])->name('documentos.descargar');	
    Route::get('documentos/{id}/create', [DocumentosController::class, 'create'])->name('documentos.create');
    Route::post('documento/store', [DocumentosController::class, 'store'])->name('documentos.store');
    Route::resource('tipos', TipoCreditoController::class);
    Route::resource('usuarios', UsuariosController::class);  
    Route::get('general', [PersonalizarController::class, 'index'] )->name('general.index');
    Route::post('general', [PersonalizarController::class, 'store'])->name('general.store');
    Route::get('/bitacora',[BitacoraController::class,'index'])->name('bitacora.index');



});


//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


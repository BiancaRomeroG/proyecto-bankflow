<?php


use App\Http\Controllers\PruebaController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\EmpleadosController;

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

Route::resource('clientes',ClientesController::class);

Route::resource('empleados',EmpleadosController::class);


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
});


//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

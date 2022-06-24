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
use App\Http\Controllers\RegistrarController;
use App\Models\Planes;
use App\Models\Tenant;
use Stancl\Tenancy\Middleware\InitializeTenancyByPath;

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


//SISTEMA CENTRAL

Route::get('/', function () {
    $planes = Planes::get();
    return view('welcome', compact('planes'));
});

Route::post('/logout', [LoginController::class, 'logout'])
    ->name('logout');


Route::get('registrar/{id}', [RegistrarController::class, 'index'])->name('registrar.index');
Route::post('registrar', [RegistrarController::class, 'store'])->name('registrar.store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    /*  Route::resource('roles', RolesController::class);
    Route::resource('areas', AreasController::class);
    Route::resource('usuarios', UsuariosController::class);
    Route::resource('clientes', ClientesController::class);

    Route::resource('empleados', EmpleadosController::class);

    Route::get('creditos/{id}/documentos', [SolicitudCreditoController::class, 'documentos'])->name('credito.documentos'); //index de documentos
    Route::resource('creditos', SolicitudCreditoController::class);
    Route::get('documentos/{id}/descargar', [DocumentosController::class, 'descargar'])->name('documentos.descargar');
    Route::get('documentos/{id}/create', [DocumentosController::class, 'create'])->name('documentos.create');
    Route::post('documento/store', [DocumentosController::class, 'store'])->name('documentos.store');
    Route::resource('tipos', TipoCreditoController::class);
    Route::resource('usuarios', UsuariosController::class);
    Route::get('general', [PersonalizarController::class, 'index'])->name('general.index');
    Route::post('general', [PersonalizarController::class, 'store'])->name('general.store');
    Route::get('/bitacora', [BitacoraController::class, 'index'])->name('bitacora.index');*/
});




//TENANCY

Route::group([
    'prefix' => '/{tenant}',
    'middleware' => [InitializeTenancyByPath::class],
], function () {
    //RUTAS DE FORTIFY-JETSREAM
    //include 'tenantAuth.php';
    //RUTAS POR DEFECTO DE LARAVEL
    //  Auth::routes();
    Route::get('/login')->name('login.tenant')->uses([LoginController::class, 'showLoginForm']);
    Route::post('/login')->name('login.in.tenant')->uses([LoginController::class, 'login']);

    Route::get('/', function () {
        return redirect()->route('login.tenant', tenant('id'));
    });


    Route::resource('usuarios', UsuariosController::class);


    Route::middleware(
        'auth'
        //config('jetstream.auth_session'),
        //'verified'
    )->group(
        function () {

            Route::get('/dashboard', function () {
                return view('tenant.dashboard');
            })->name('dashboard.tenant');

            Route::post('/logout', [LoginController::class, 'logout'])
                ->name('logout.tenant');
            //RUTAS DE EMPRESA
            Route::resource('roles', RolesController::class);
            Route::resource('areas', AreasController::class);
            Route::resource('usuarios', UsuariosController::class);
            Route::resource('clientes', ClientesController::class);

            Route::resource('empleados', EmpleadosController::class);

            Route::get('/users/informacion-creditos', function () {
                return view('tenant.informacion.info_creditos');
            })->name('info_creditos');
            Route::get('creditos/{id}/documentos', [SolicitudCreditoController::class, 'documentos'])->name('credito.documentos'); //index de documentos
            Route::resource('creditos', SolicitudCreditoController::class);
            Route::get('documentos/{id}/descargar', [DocumentosController::class, 'descargar'])->name('documentos.descargar');
            Route::get('documentos/{id}/create', [DocumentosController::class, 'create'])->name('documentos.create');
            Route::post('documento/store', [DocumentosController::class, 'store'])->name('documentos.store');
            Route::resource('tipos', TipoCreditoController::class);
            Route::resource('usuarios', UsuariosController::class);
            // Route::get('general', [PersonalizarController::class, 'index'])->name('general.index');
            // Route::post('general', [PersonalizarController::class, 'store'])->name('general.store');
            Route::get('/bitacora', [BitacoraController::class, 'index'])->name('bitacora.index');
        }
    );
});

<?php

use App\Http\Controllers\AreasController;
use App\Http\Controllers\AsociadosController;
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BitacoraController;
use App\Http\Controllers\SCBitacoraController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\creditoClienteController;
use App\Http\Controllers\DocumentosController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\LegalizacionController;
use App\Http\Controllers\misCreditosController;
use App\Http\Controllers\SolicitudCreditoController;
use App\Http\Controllers\TipoCreditoController;
use App\Http\Controllers\PersonalizarController;
use App\Http\Controllers\PoliticaController;
use App\Http\Controllers\RegistrarController;
use App\Http\Controllers\RequisitosController;
use App\Http\Controllers\SC_BitacoraController;
use App\Http\Controllers\SC_EmpresasController;
use App\Http\Controllers\SC_PlanesController;
use App\Http\Controllers\SC_UsuariosController;
use App\Http\Controllers\ReportesController;
use App\Models\empresa;
use App\Models\Planes;
use App\Models\SC_Dashboard;
use App\Models\Tenant;
use Illuminate\Http\Request;
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

Route::get('/log-empresa', function(){
    return view('auth.log_empresa');
})->name('log-empresa');

Route::post('get-login', function(Request $request){
    if($request->empresa == null){
        return redirect()->route('login');
    }else{
        return redirect(url(''.$request->empresa.'/login'));
    }

})->name('go-login');

Route::get('registrar/{id}', [RegistrarController::class, 'index'])->name('registrar.index');
Route::post('registrar', [RegistrarController::class, 'store'])->name('registrar.store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        $datos = new SC_Dashboard();
        return view('dashboard', compact('datos'));
    })->name('dashboard');

    Route::resource('sc_usuarios', SC_UsuariosController::class);
    Route::resource('empresas', SC_EmpresasController::class);
    Route::resource('planes', SC_PlanesController::class);
    Route::resource('sc_bitacora', SC_BitacoraController::class);

    Route::get('/bitacora', [SCBitacoraController::class, 'index'])->name('bitacoraCentral.index');
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

            Route::get('/dashboardcliente', function () {
                return view('tenant.dashboardcliente');
            })->name('dashboardcliente.tenant');

            Route::post('/logout', [LoginController::class, 'logout'])
                ->name('logout.tenant');
            //RUTAS DE EMPRESA
            Route::resource('roles', RolesController::class);
            Route::resource('areas', AreasController::class);
            Route::resource('usuarios', UsuariosController::class);
            Route::resource('clientes', ClientesController::class);
            Route::resource('empleados', EmpleadosController::class);
            Route::resource('tipos', TipoCreditoController::class);
            Route::resource('usuarios', UsuariosController::class);
            Route::get('creditos/{id}/editarDetalles', [SolicitudCreditoController::class, 'editDetails'])->name('creditos.editarDetalles');
            Route::put('creditos/actualizarDetalles', [SolicitudCreditoController::class, 'updateDetails'])->name('creditos.updateDetalles');
            Route::resource('creditos', SolicitudCreditoController::class);
            Route::resource('creditos.documentos', DocumentosController::class);
            Route::resource('creditos.legalizacion', LegalizacionController::class);
            Route::resource('creditos.asociados', AsociadosController::class);
            Route::resource('miCredito', creditoClienteController::class);
            Route::resource('politica', PoliticaController::class);

            Route::get('documentos/{id}/descargar', [DocumentosController::class, 'descargar'])->name('documentos.descargar');

            Route::get('/users/informacion-creditos', function () {
                return view('tenant.informacion.info_creditos');
            })->name('info_creditos');

           

        
            Route::get('creditos/{id}/marcar', [SolicitudCreditoController::class, 'marcar'])->name('creditos.marcar');
            Route::get('/bitacora', [BitacoraController::class, 'index'])->name('bitacora.index');
            Route::get('/requisitos/{id}', [RequisitosController::class, 'index'])->name('requisitos.index');
            Route::get('/requisitos/{id}/create', [RequisitosController::class, 'create'])->name('requisitos.create');
            Route::post('/requisitos/store', [RequisitosController::class, 'store'])->name('requisitos.store');
            Route::get('/requisitos/{id}/edit', [RequisitosController::class, 'edit'])->name('requisitos.edit');
            Route::put('requisitos/{id}/update', [RequisitosController::class, 'update'])->name('requisitos.update');
            Route::get('reportes',[ReportesController::class,'index'])->name('reportes.index');
            
        }
    );
});

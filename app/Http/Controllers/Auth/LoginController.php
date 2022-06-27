<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\BitacoraController;
use App\Http\Controllers\Controller;
use App\Models\Sc_Bitacora;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
      //  $redirectTo = RouteServiceProvider::getHome();
    }


    public function showLoginForm()
    {
        if (empty(tenant('id')))
            return view('auth.login');
        else
            return view('tenant.auth.login');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected function authenticated(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect(tenant('id').'/dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }




    public function logout(Request $request)
    {
        /* Sc_Bitacora::create([
        'fecha' => now(),
        'accion' => 'Cerró sesión',
        'descripcion' => 'Cerró sesión en el sistema el usuario: '. Auth::user()->name.' '.Auth::user()->ap_paterno.' '.Auth::user()->ap_materno.' con id: '.Auth::user()->id,
        'id_usuario' => Auth::user()->id
        ]); */
        
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect(tenant('id'). '/');
    }
}

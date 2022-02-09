<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Http\Request\LoginRequest;
use App\Http\Requests\LoginRequest as RequestsLoginRequest;
use App\Model\RoleModel;
use Illuminate\Http\Request;

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
    }
    public function index()
    {
       

        return view('pages.login');
    }
    public function login(Request $request)
    {
        
        $credentials = $request->only('email', 'password');
       
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
             $role = RoleModel::find(auth()->user()->role_id);

            if ($role->the_role == "superadmin") {

                return redirect()->route('superadmin.dashboard');
            } elseif ($role->the_role == "admin") {

                return redirect()->route('admin.dashboard');
            }
        }
        return redirect()->route('login')->with('error', 'İşlem başarısız');

        
    }
    
}
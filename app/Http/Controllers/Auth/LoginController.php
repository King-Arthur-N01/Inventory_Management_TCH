<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
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
    public function indexlogin() {
        return view('auth.login');
    }
    public function authenticateuser(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('nik','password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('home')->with('Signed in');
        }
        return redirect("login")->with('Login details are not valid');
    }
    public function enterlogin(){
        if (Auth::check()) {
            return view('home');
        }
    return redirect("login")->with('You are not allowed to access');
    }
    public function signout(){
    Session::flush();
    Auth::logout();
    return Redirect('login');
    }
}

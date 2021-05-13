<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        //$credentials = $request->only('email', 'password');
        //$remember_me  = ($request->remember) ? TRUE : FALSE;

        //if (Auth::attempt($credentials), ($remember_me)) {
            if (auth()->attempt($request->only('email', 'password'), $request->remember))
            {
                // Authentication passed...
                return redirect()->intended('dashboard');
            } else {
                return back()->with('status', 'Invalid Login Details');
        }
    }
}

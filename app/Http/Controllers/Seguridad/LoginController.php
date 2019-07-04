<?php

namespace SistAlmacen\Http\Controllers\Seguridad;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use SistAlmacen\Http\Controllers\Controller;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/admin';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('seguridad.index');
    }

    public function username()
    {
        return 'Email';
    }
}

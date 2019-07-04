<?php

namespace SistAlmacen\Http\Controllers\Admin;

use Illuminate\Http\Request;
use SistAlmacen\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin.admin.index');
    }
}

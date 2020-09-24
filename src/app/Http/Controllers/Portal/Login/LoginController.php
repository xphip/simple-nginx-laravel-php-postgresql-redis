<?php

namespace App\Http\Controllers\Portal\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    public function index() {

        return view('portal.login.login');
    }
}

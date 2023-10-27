<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Login form
    public function login() {
        return view('admin.login');
    }
}

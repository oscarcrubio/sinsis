<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');
    }

    public function dashboard(){
        return view('admin.index');
    }
}

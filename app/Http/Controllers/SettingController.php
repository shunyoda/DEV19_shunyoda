<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    public function __construct()
     {
        $this->middleware('auth');
    }
 
     public function index()
     {
         $auth = Auth::user();
         return view('setting', ['auth' => $auth]);
     }
}

 
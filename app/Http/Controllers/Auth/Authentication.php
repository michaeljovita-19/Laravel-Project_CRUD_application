<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Authentication extends Controller
{
    function create(){
        return view('login');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index() {
        echo "Halo, selamat datang";
        echo "<h1>". Auth::user()->name ."</h1>";
    }
}

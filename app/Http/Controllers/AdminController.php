<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index()
    {
        echo "Hallo, ", Auth::user()->name;
        return view('admin');
    }
    function operator()
    {
        echo "Hallo, ", Auth::user()->name;
        return view('admin');
    }
    function keuangan()
    {
        echo "Hallo, ", Auth::user()->name;
        return view('admin');
    }
    function marketing()
    {
        echo "Hallo, ", Auth::user()->name;
        return view('admin');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PrestamoController extends Controller
{
    public function index()
    {
        $pres = App\Prestamo::all();
 
         return view('prestamos', compact('pres'));
    }
}


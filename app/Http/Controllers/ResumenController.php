<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ResumenController extends Controller
{
    public function index()
    {
        $resumenes = App\ResumenDePago::all();
 
         return view('resumen',compact('resumenes'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagoController extends Controller
{
    public function index()
    {
        $pagados = App\PagoRealizado::all();
 
         return view('pago',compact('pagados'));
    }
}

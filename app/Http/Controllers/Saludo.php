<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Saludo extends Controller
{
    public function saludo(){
        return view('saludo');
    }
}

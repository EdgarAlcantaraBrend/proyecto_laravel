<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Numeros extends Controller
{
    public function numeros(){
        return view('numeros');
    }
}

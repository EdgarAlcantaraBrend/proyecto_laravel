<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Profesores extends Controller
{
    public function profesores(){
        return view('profesores');
    }
}

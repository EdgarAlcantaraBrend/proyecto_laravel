<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TablaSaludo extends Controller
{
    public function tablaSaludo(){
        return view('tablaSaludo');
    }
}

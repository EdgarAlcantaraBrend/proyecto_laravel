<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Grafias extends Controller
{
    public function letra_a(){
        return view('grafias.letra_a');
    }
    public function letra_ch(){
        return view('grafias.letra_ch');
    }
}

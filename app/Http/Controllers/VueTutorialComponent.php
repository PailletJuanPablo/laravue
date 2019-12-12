<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VueTutorialComponent extends Controller
{
    public function components() {
        return view('tutorials.componentes');
    }

    public function dataBinding() {
        return view('tutorials.dataBinding');
    }

     public function conditional() {
        return view('tutorials.conditional');
    }

}

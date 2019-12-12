<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VueTutorialComponent extends Controller
{
    public function index()
    {
        return view('tutorials.index');
    }

    public function components() {
        return view('tutorials.componentes');
    }

    public function dataBinding() {
        return view('tutorials.dataBinding');
    }

     public function conditional() {
        return view('tutorials.conditional');
    }

    public function loops()
    {
        return view('tutorials.loops');
    }

    public function events()
    {
        return view('tutorials.events');
    }

    public function methods()
    {
        return view('tutorials.methods');
    }




}

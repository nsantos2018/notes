<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{   
    /*
    public function index()
    {
        //echo "Hello Controller!";
        return view('main');
    }
    */

    public function index($value)
    {
        return view('main', ['value' => $value]);

        //outro exemplo
        //return view('main')->with('value', $value);
        //return view('main')->with('nome', $value);
        //return view('main')->with('sobrenome', $value);
    }

    public function page2($value)
    {
        return view('page2', ['value' => $value]);        
    }

    public function page3($value)
    {
        return view('page3', ['value' => $value]);        
    }
}
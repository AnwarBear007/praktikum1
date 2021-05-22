<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class praktikum1 extends Controller
{
    public function home (){
        return view("Home0167");
    }
    public function artikel (){
        return view('Artikel0167');
    }
    public function contact (){
        return view('ContacUs0167');
    }
}

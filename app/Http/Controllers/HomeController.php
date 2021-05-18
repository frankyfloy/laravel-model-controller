<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{

    public function home(){
        $prova = 'ciao';
        return view('home',compact('prova'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecondController extends Controller
{
    //
    public function showString(){
        return 'Second';
    }

    public function getIndex(){
        return view('welcome');
    }
}

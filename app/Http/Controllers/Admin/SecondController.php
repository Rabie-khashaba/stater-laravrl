<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class SecondController extends Controller
{

    // execute on all method   (user must have auth)
    public function __construct(){
        //$this->middleware('auth');
        //to except method from middleware
        $this->middleware('auth')->except('showString2');
    }


    public function showString0(){
        return "Static St ring0";
    }
    public function showString1(){
        return "Static String1";
    }
    public function showString2(){
        return "Static String2";
    }
    public function showString3(){
        return "Static String3";
    }

};



<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;




class UserController extends Controller
{
    public function showUserName(){
        return 'Ahmed Emad';
    }

    public function getIndex(){
        return view('welcome');
    }

    public function getpara(){
        // return view('paragraph', [
        //     'name' => 'Rabie khashaba' ,
        //     'id' => 1005 ,
        //     'age' => 21

        // ]); // passing data to veiw
        //or
        //return view('paragraph')->with('name' , 'Rabie');
        //or


        // passing data by object
        $data = [];
        $data['name'] = 'Rabie';
        $data['id'] = 1005;
        $data['age'] = 21;
        //return view('paragraph' , $data);

        // passing data by object
        $obj = new \stdClass();

        $obj -> name = "Rabie";
        $obj -> age = 21;
        $obj -> id = 1005;

        //foreach
        // $arr = ["Rabie" , "Ali" , "Mohamed"];
        // return view('paragraph' , compact('arr'));

        return view('paragraph' , compact('obj') ,$data );


    }

    //landing
    public function getLanding(){
        return view('landing1');
    }

    //about page
    public function getAbout(){
        return view('about');
    }

}


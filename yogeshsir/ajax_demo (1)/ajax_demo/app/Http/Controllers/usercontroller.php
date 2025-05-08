<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function Index()
    {
        return view("welcome");
    }

    public function Ajax(Request $res) 
    {
        $name = $res->val;
        $data = array('name'=>$name);

        echo view("Ajax")->with($data);   
    }
}

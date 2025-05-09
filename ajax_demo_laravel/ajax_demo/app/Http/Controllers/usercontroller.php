<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class usercontroller extends Controller
{
    public function Index()
    {
        $arr['data'] = DB::table('user')->get();
        return view("welcome")->with($arr); 
    }

    public function GetData(Request $res)
    {
        $id = $res->id;
        $arr = DB::table('user')->where('id',$id)->first();
        echo json_encode($arr);
    }

    public function Ajax(Request $res) 
    {

        if(isset($res->d_id))
        {
            $id = $res->d_id;

            DB::table('user')->where('id',$id)->delete();
        }
        else
        {   
            $name = $res->name;
            $email = $res->email;
            $password = $res->password;
    
            $arr = array('name'=>$name,'email'=>$email,'password'=>$password);
            DB::table('user')->insert($arr);
        }
      

       $arr['data'] = DB::table('user')->get();

        echo view("Ajax")->with($arr);   
    }

    public function update(Request $res) 
    {
        
          
            $name = $res->name;
            $email = $res->email;
            $password = $res->password;
            $id = $res->uid;
            $arr = array('name'=>$name,'email'=>$email,'password'=>$password);
            DB::table('user')->where('id',$id)->update($arr);
        
      

       $arr['data'] = DB::table('user')->get();

        echo view("Ajax")->with($arr);   
    }
}

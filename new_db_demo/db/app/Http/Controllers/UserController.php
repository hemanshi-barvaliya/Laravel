<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    function Index(Request $res)
    {
        $arr['data'] = DB::table('db')->get();
        return view("welcome")->with($arr);
    }

    function InsertData(Request $res)
    {
        $Userdata = array('name'=>$res->name,"email"=>$res->email,"password"=>$res->password);
        DB::table('db')->insert($Userdata);
        return redirect("/");
    }
    function Deletedata(Request $res,$id)
    {
        DB::table('db')->where("id",$id)->delete();
        return redirect("/");

    }
    function Getsingledata(Request $res,$id)
    {
        $arr['data'] = DB::table('db')->where("id",$id)->get();
        return view('updatedata')->with($arr);
    }
    function Updatedata(Request $res,$id)
    {
        $userdata = array('name'=>$res->name,"email"=>$res->email,"password"=>$res->password);
        DB::table('db')->where("id",$id)->update($userdata);
        return redirect("/");
    }
}

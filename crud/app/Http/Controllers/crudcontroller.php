<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class crudcontroller extends Controller
{
    function Index(Request $res)
    {
        $arr['data'] = DB::table('admin')->get();
        return view("welcome")->with($arr);
    }

    function InsertData(Request $res)
    {
        $Userdata = array('name'=>$res->name,"email"=>$res->email,"password"=>$res->password);
        DB::table('admin')->insert($Userdata);
        return redirect("/");
    }

    function DeleteData(Request $res,$id)
    {
        DB::table('admin')->where("id",$id)->delete();
        return redirect("/");
    }

    function GetSingleData(Request $res,$id)
    {
       $arr['data'] = DB::table('admin')->where("id",$id)->get();
        return view("update")->with($arr);
    }

    function UpdateData(Request $res,$id)
    {
        $Userdata = array('name'=>$res->name,"email"=>$res->email,"password"=>$res->password);
        DB::table('admin')->where("id",$id)->update($Userdata);
        return redirect("/");
    }
}

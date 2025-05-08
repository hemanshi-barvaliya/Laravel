<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;

class UserController extends Controller
{
   public function Insert()
    {   
        $no = "1";
        $name = "CDMI";
        $sub1 = "55";
        $sub2 = "65";
        $sub3 = "59";
        $total = $sub1+$sub2+$sub3;
        $per = ceil($total / 3);

        return view('welcome')->with('no', $no)
                              ->with('name', $name)
                              ->with('sub1', $sub1)
                              ->with('sub2', $sub2)
                              ->with('sub3', $sub3)
                              ->with('total', $total)
                              ->with('per', $per);
    }

    public function Formdata(request $res)
    {
        $no = $res->no;
        $name = $res->name;
        $email = $res->email;
        $sub1 = $res->sub1;
        $sub2 = $res->sub2;
        $sub3 = $res->sub3;

        $data = array('no'=>$no,
                        'name'=>$name,
                        'email'=>$email,
                        'sub1'=>$sub1,
                        'sub2'=>$sub2,
                        'sub3'=>$sub3);

        return view('form')->with($data);
    }

    public function Getadmin(Request $req)
    {

        if($req->name)
        {
                $name = $req->name;
                $email = $req->email;
                $password = $req->password;

                $data = array('name'=>$name, 'email'=>$email, 'password'=>$password);
              
                admin::Insert($data);

                return redirect('/getadmin');


        }
       $data['list'] = admin::get();
       return view('admin')->with($data);
    }

    public function delete($id)
    {
        admin::find($id)->delete();
        return redirect('/getadmin');
    }
    public function update(Request $req)
    {
        $id = $req->id;
        $data['list']= admin::where("id",$id)->get();
        return view("editrecord")->with($data);
    }
    public function updatedrecord(Request $req)
    {
        $id = $req->id;

        if($req->name)
        {
            $name= $req->name;
            $email= $req->email;
            $password= $req->password;

            $data = array('name'=>$name,'email'=>$email,'password'=>$password);
            admin::where("id",$id)->update($data);
            return redirect('/getadmin');

        }
    }

    public function logoutpage(Request $req)
    {
        $req->session()->flush();
        
        return redirect('/');
    }
  
    
}?>

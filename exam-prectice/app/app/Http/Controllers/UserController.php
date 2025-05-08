<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;

class UserController extends Controller
{
    public function Insert(Request $req)
    {
        if($req->name)
        {
            $name = $req->name;
            $email = $req->email;
            $password = $req->password;
            $hobby = $req->input('hobby', []);

            $file = $req->file('image');
            $file_name = $file->getClientOriginalName();
            $image_name = time().$file_name;
            $file->move(public_path('images'),$image_name);

            $data['list'] = array('name'=>$name,
                                  'email'=>$email,
                                  'password'=>$password,
                                  'hobby'=>implode(',', $hobby),
                                  'image'=>$image_name);
            admin::insert($data);
            return redirect('welcome');
                            
        }

        $data['list'] = admin::get();   
        return view('welcome')->with($data);
    }

    public function Logout()
    {
        $req->session()->flush();
        return redireact('welcome');
    }

    public function delete($id)
    {
        admin::find($id)->delete();
        return redirect('welcome');
    }

    public function update(Request $req)
    {
        $id = $req->id;
        $data['list']= admin::where("id",$id)->get();
        return view("update")->with($data);

    }
     
    public function updaterecord(Request $req,$id)
    {
        $name = $req->name;
            $email = $req->email;
            $password = $req->password;
            $hobby = $req->input('hobby', []);
            $image_name = ''; 
            $file = $req->file('image');
            // $fileName = $file->getClientOriginalName() ;
            $image_name = time() . $file->getClientOriginalName();
            $file->move(public_path('images'), $image_name); 

            $data['list'] = array('name'=>$name,
                                  'email'=>$email,
                                  'password'=>$password,
                                  'hobby'=>implode(',', $hobby),
                                  'image'=>$image_name);
    
           
            admin::where('id', $id)->update($data);
    
           
            return redirect('/welcome');
        }

    }




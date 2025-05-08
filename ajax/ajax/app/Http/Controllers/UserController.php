<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;

class UserController extends Controller
{
    public function Form(Request $req)
    {
        if($req->name) {
            $name = $req->name;
            $email = $req->email;
            $password = $req->password;

            $data = array('name' => $name, 'email' => $email, 'password' => $password); 

            admin::insert($data);
            return redirect('/form');

        }

        $data['list'] = admin::get();

        echo view ('form')->with($data);

        
       
    }

  public function delete($id)
  {
     admin::find($id)->delete();
     return redirect('form');
  }


  public function update(Request $req,$id)
  {
      $data['list']= admin::where("id",$id)->get();

      print($data['list']);
      return view("updatedata")->with($data);
      
      

  }
  public function updaterecord(Request $req, $id)
    {
        if ($req->name) {
        
            $name = $req->name;
            $email = $req->email;
            $password = $req->password;


            $data = array(
                'name' => $name,
                'email' => $email,
                'password' => $password,
            );
           

            
            admin::where('id', $id)->update($data);
            return redirect('/form');
        }
        
    }
}

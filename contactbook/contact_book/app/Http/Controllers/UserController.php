<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\admin;

class UserController extends Controller
{
    public function GetAdmin(Request $req)
    {
        if($req->name)
        {
            $name = $req->name;
            $email = $req->email;
            $password = $req->password;
            $contact = $req->contact;
            $file = $req->file('image');
            $file_name = $file->getClientOriginalName();
            $image_name = time().$file_name;
            $file->move(public_path('images'),$image_name);

            $data['list'] = array('name'=>$name,
                                  'email'=>$email,
                                  'password'=>$password,
                                  'contact'=>$contact,
                                  'image'=>$image_name);
            admin::insert($data);
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
        return view("updatedata")->with($data);

    }
    public function updaterecord(Request $req, $id)
{
    if ($req->name) {
   
        $name = $req->name;
        $email = $req->email;
        $password = $req->password;
        $contact = $req->contact;
            $image_name = ''; 
            $file = $req->file('image');
            $file_name = $file->getClientOriginalName();
            $image_name = time() . $file_name; 
            $file->move(public_path('images'), $image_name); 
    


        $data = array(
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'contact' => $contact,
            'image' => $image_name, 
        );

       
        admin::where('id', $id)->update($data);

       
        return redirect('/getadmin');
    }
}


}

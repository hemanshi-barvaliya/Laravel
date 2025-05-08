<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\UserImage;

class UserController extends Controller
{
    public function formdata(Request $res)
    {
        $name = $res->name;
        $email = $res->email;
        $password = $res->password;

        $data = [
            'name' => $name,
            'email' => $email,
            'password' => $password
        ];

        return view('form')->with($data);
    }

    public function GetAdmin(Request $req)
    {
        if ($req->email) {
            $data = [
                'name' => $req->name,
                'email' => $req->email,
                'password' => $req->password
            ];

            Admin::insert($data);
            return redirect('/getadmin');
        }

        $data['list'] = Admin::all();
        return view('admin')->with($data);
    }

    public function delete(Request $req)
    {
        $id = $req->id;
        Admin::find($id)->delete();

        return redirect('/getadmin');
    }

    public function update(Request $req, $id)
    {
        $data['list'] = Admin::where("id", $id)->get();
        return view("studentedit")->with($data);  
    }

    public function updatedrecord(Request $req, $id)
    {
        if ($req->name) {
            $data = [
                'name' => $req->name,
                'email' => $req->email,
                'password' => $req->password
            ];

            Admin::where("id", $id)->update($data);
            return redirect('/getadmin');
        }
    }

    public function logoutpage(Request $req)
    {
        $req->session()->flush();
        return redirect('/');
    }
    
    public function ImageAdd(Request $req){
        
        if($req->iname) 
        {
            $name = $req->iname;
            $file = $req->file('profile');

            if ($file)
            {
                $file_name = $req->file('profile')->getClientOriginalName();
                $imageName = time(). $file_name;
                $file->move(public_path('images'),$imageName);
            }

            $data['list']=array('image_name'=>$name,'profile'=>$imageName);
            UserImage::insert($data);
            return redirect('/storeimage');
        }

        $data['list'] = UserImage::get();
        return view('imagestore')->with($data);
    }

    public function imgdelete(Request $req, $id)
    {
        $image = UserImage::find($id)->delete();
        return redirect('/storeimage');
    }

    public function updateimage(Request $req, $id)
    {
       
        $data['list'] = UserImage::where('id', $id)->get();
        return view('updateimg')->with($data);
    }

public function updateimg(Request $req, $id)
{
 
    if ($req->iname) 
    {
        
        $name = $req->iname;
        $imageName = '';

        $oldImage = UserImage::find($id);
        $imageName = $oldImage->profile;

        $file = $req->file('profile');

        if ($file)
        {
           
            $file_name = $req->file('profile')->getClientOriginalName();
            
            $imageName = time() . $file_name;
        
            $file->move(public_path('images'), $imageName);
        }
       
        $data = [ 'image_name' => $name,'profile'  => $imageName ];
        UserImage::where('id', $id)->update($data);

        
        return redirect('/storeimage');
    }
}
   
}




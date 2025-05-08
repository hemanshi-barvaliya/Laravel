<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\Userimage;


class UserController extends Controller
{
    // public function Insert()
    // {   
    //     $no = "1";
    //     $name = "CDMI";
    //     $sub1 = "55";
    //     $sub2 = "65";
    //     $sub3 = "59";
    //     $total = $sub1+$sub2+$sub3;
    //     $per = ceil($total / 3);

    //     return view('welcome')->with('no', $no)
    //                           ->with('name', $name)
    //                           ->with('sub1', $sub1)
    //                           ->with('sub2', $sub2)
    //                           ->with('sub3', $sub3)
    //                           ->with('total', $total)
    //                           ->with('per', $per);
    // }

    
    
    // public function Demo()
    // {
    //     $no = "1";
    //     return view ('welcome')->with('data',$no);
    // }

    public function FormData(Request $res)
    {
        $name = $res->name;
        $email = $res->email;

        $data = array('name'=>$name, 'email'=>$email);

        return view('form')->with($data);
    }
    
    public function GetAdmin(Request $req)
    {
        if($req->name)
        {

            $name = $req->name;
            $email = $req->email;
            $password = $req->password;
        
            $data = array('name'=>$name,'email'=>$email,'password'=>$password);

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
        return view("update")->with($data);

    }
   


    public function updatedrecord(Request $req)
    {
        $id = $req->id;

        if($req->name)
        {
            // $name = $req->name;
            // $email = $req->email;
            // $password = $req->password;

            $data = array('name'=>$req->name,'email'=>$req->email,'password'=>$req->password);
            admin::where ("id",$id)->update($data);
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
            $file_name = $req->file('profile')->getClientOriginalName();
            $imageName = time(). $file_name;
            $file->move(public_path('images'),$imageName);
            $data['list']=array('img_name'=>$name,'profile'=>$imageName);
            Userimage::insert($data);
            return redirect('/storeimage');
        }

        $data['list'] = Userimage::get();
        return view('imagestore')->with($data);
    }

  

    public function imgdelete(Request $req, $id)
    {
        $image = Userimage::find($id)->delete();
        return redirect('/storeimage');
    }

    public function updateimage(Request $req, $id)
{
   
    $data['list'] = Userimage::where('id', $id)->get();
    return view('updateimage')->with($data);
}

public function updateimg(Request $req, $id)
{
 
    if ($req->iname) {
        
        $name = $req->iname;
        $imageName = '';

        $file = $req->file('profile');
           
        $file_name = $req->file('profile')->getClientOriginalName();
           
        $imageName = time() . $file_name;
    
        $file->move(public_path('images'), $imageName);
       
        $data = [ 'img_name' => $name,'profile'  => $imageName ];
        Userimage::where('id', $id)->update($data);

        
        return redirect('/storeimage');
    }

    
}

    
}

  

?>
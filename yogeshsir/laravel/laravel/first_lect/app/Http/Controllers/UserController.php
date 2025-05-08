<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\student;
use App\Models\client;

class UserController extends Controller
{
    public function Index(Request $req){
        $name = "Yogesh Parmar";
        $req->session()->put('se_name','yogesh_session'); // add session
        return view('welcome')->with('data',$name);
    }
    public function About(){
        return view('about');
    }
    public function Contact(){
        return view('contact');
    }
    public function FormData(Request $req){

        $name = $req->name;
        $email = $req->email;
        
        $data = array('name'=>$name,'email'=>$email);

        return view('form')->with($data);
    }
    public function ParamArg(Request $req){
        $name = $req->name;
        $email = $req->email;
        $data = array('name'=>$name,'email'=>$email);
        return view('parameter')->with($data);
    }

    public function GetAdmin(Request $req){
        $se = $req->session()->get('se_name');
        if(!$se){
            return redirect('/about');
        }
        if($req->name)
        {
            $data = array('name'=>$req->name,'email'=>$req->email,'password'=>$req->password);
            admin::insert($data); //insert data in database table
            return redirect('/getadmin');
        }
        $data['list'] = admin::get(); // get all data from admin table   
        return view('admin')->with($data);
    }

    public function StudentRecord(Request $req){
        if($req->sname){
            $data = array('sname'=>$req->sname,'semail'=>$req->semail,'spassword'=>$req->spassword);
            student::insert($data);
            return redirect('/student');
        }
        $data['list'] = student::get();
        return view('student')->with($data);
    }

    public function DeleteStudent(Request $req){
        $id = $req->id;
        student::find($id)->delete();
        return redirect('/student');
    }

    public function Logout_session(Request $req){
        $req->session()->flush(); // remove session
        return redirect('about');
    }

    public function EditgetStudent(Request $req){
        $id= $req->id;
        $data['list'] = student::where("id",$id)->get();
        return view('editstudentfile')->with($data);
    }

    public function EditStudent(Request $req){
        $id = $req->id;
        if($req->sname){
            $data = array('sname'=>$req->sname,'semail'=>$req->semail,'spassword'=>$req->spassword);
            student::where("id",$id)->update($data);
            return redirect('/student');
        }
    }

    public function ImageAdd(Request $req){
        if($req->Iname)
        {
            $name = $req->Iname;
            $file = $req->file('profile');
            $file_name = $req->file('profile')->getClientOriginalName();
            $imageName = time(). $file_name;
            $file->move(public_path('upload_img'),$imageName);
            $data['list']=array('img_name'=>$name,'profile'=>$imageName);
            client::insert($data);
            // print_r($file);
            return redirect('/storeimage');
        }
        $data['list'] = client::get();
        return view('ImageStore')->with($data);
    }
}

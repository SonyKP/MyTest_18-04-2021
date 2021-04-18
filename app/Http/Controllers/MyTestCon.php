<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Register;

class MyTestCon extends Controller
{
    /*******************
*@function name:register 
*@function:user registeration
*@Author:Sony K P 
*@date:18/04/2021
*******************/ 
    public function regform()
    {
        return view('register');
    }
    public function register(Request $req)
    {
            $req->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'gender'=>'required',
            'age'=>'required',
            'address'=>'required',
            'phoneno'=>'required',
            'email'=>'required|email|unique:registers',
            'password'=>'required|min:6|max:16'
            ]);
    
            $user=new Register;
            $user->firstname=$req->firstname;
            $user->lastname=$req->lastname;
            $user->gender=$req->gender;
            $user->age=$req->age;
            $user->address=$req->address;
            $user->phoneno=$req->phoneno;
            $user->email=$req->email;
            $user->password=Hash::make($req->password);
            $query = $user->save();
            if($query)
            {
                return back()->with('success','Successfully Registered');
            }
            else
            {
                return back()->with('fail','Something went wrong');
            }    
    }
     
    public function login()
    {
        return view('login');
    }
    function userhome(Request $req)
    {

      $data=['LoggedUser'=>Register::where('id','=',Session('LoggedUser'))->first()];
        return view('userhome',$data);
    }
    function check(Request $req)
    {
        $req->validate([
            'email'=>'required|email',
            'password'=>'required'
            ]);
            $email=$req->email;
            $pass=$req->password;
            if($email =='admin@gmail.com' && $pass =='admin') 
            {
                return view('adminhome');
            }    
            $userinfo=Register::where('email',$email)->first(); 
            if(!$userinfo)
            {
                return back()->with('fail','We cant recognize email');
            }   
            else
            {
                if(Hash::check($req->password,$userinfo->password))
                {
                    $req->session()->put('LoggedUser',$userinfo->id);
                    $data=['LoggedUserinfo'=>Register::where('id','=',Session('LoggedUser'))->first()];
                    return view('userhome',$data);
                }
                  
            }
    }

    function userview()
    {
        $data=Register::all();
        return view('userview',['datalist'=>$data]);

    }
    function deleteuser($id)
    {
        $data=Register::find($id);
        $data->delete();
        return redirect('userview');
    }
  
    public function updateView($id)
    {
    $data=Register::find($id);
    
    return view('updateuser',['datalist'=>$data]);
    }
 

    function updateuser(Request $req)
    {
        $data=Register::find($req->id);
        $data->firstname=$req->firstname;
        $data->lastname=$req->lastname;
        $data->gender=$req->gender;
        $data->age=$req->age;
        $data->address=$req->address;
        $data->phoneno=$req->phoneno;
        $data->save();
        return redirect('userhome');
}
}

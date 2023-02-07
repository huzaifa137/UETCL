<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\admin;


class Master extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function Add_Admin(Request $request)
    {
        $Admin = new Admin();
        
        $request->validate([
            'Admin_name'=>'required',
            'email'=>'required|unique:admins',
            'phonenumber'=>'required|min:10|max:10',
            'password'=>'required|min:5|max:12',
            'confirm_password'=>'required|min:5|max:12'
        ]);
    
    
        $password1=$request->input('password');
        $password2=$request->input('confirm_password');

        if(strcmp($password1,$password2)!=0)
        {
            return back()->with('fail','Password entered dont much');
        }
        
        $Admin->name = $request->input('Admin_name');
        $Admin->email = $request->input('email');
        $Admin->phonenumber = $request->input('phonenumber');
        $Admin->password = Hash::make($request->input('password'));
        $save = $Admin->save();

        if($save)
        {
            return back()->with('success','Account created Successfully')
            ->with('fail','Account waiting for Activation');
        }
        else
        {
            return back()->with('fail','Failed to create account');
        }
    }

    public function Admin_login(Request $request)
    {
        $request->validate([
            
            'email'=>'required',
            'password'=>'required|min:5|max:12',
        ]);

        if($userInfo = Admin::all()
                        ->where('email','=',$request->email)
                        ->where('status','=','invalid')
                        ->first())
                        {
                            return back()->with('fail','Account de-activated');    
                        } 

                $userInfo = Admin::where('email','=',$request->email)->first();
                if(Hash::check($request->password,$userInfo->password))
                    {  

                        $Admin_status =  $userInfo['Admin_status'];
                       if($Admin_status == 'normal')
                       {
                             $request->session()->put('LoggedUser',$userInfo->id); 
                             return redirect('dashboard');
                       }
                        else{
                            
                            $request->session()->put('LoggedUser',$userInfo->id); 
                            return redirect('Admin.dashboard');
                        }
                    }
                else     
                    {
                    return back()->with('fail','incorrect email or password'); 
                    }
        }

        public function dashboard()
        {
            $data=['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];

            return view('Adminpages.Dashboard');
        }

        public function logout()
        {
            if(session()->has('LoggedUser'))
            {
                session()->pull('LoggedUser');
                return redirect('/');
            }
        }

        
}

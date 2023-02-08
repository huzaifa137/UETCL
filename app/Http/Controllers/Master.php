<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\register;
use App\Models\officer;
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
                            return redirect('dashboard');
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

            $all = DB::table('registers')->count();
            $open = register::where('Case_Status','open')->count();
            $closed = register::where('Case_Status','close')->count();
            $court = register::where('Case_Status','court')->count();

            return view('Adminpages.Dashboard',compact(['data','all','open','closed','court']));
        }

        public function logout()
        {
            if(session()->has('LoggedUser'))
            {
                session()->pull('LoggedUser');
                return redirect('/');
            }
        }

        public function Add_Record(Request $request)
        {
            $request->validate([
                'police_station'=>'required',
                'Investigation_officer'=>'required',
                'Police_Case_Ref'=>'required',
                'Inter_Ref_Number'=>'required',
                'Transmission_Line'=>'required',
                'Case_Status'=>'required',
                'particulars_of_the_case'=>'required',
                'Brief_facts_of_the_case'=>'required',
                'Date'=>'required',
            ]);

            $post = new register();            
            
            $post->police_station=$request->police_station;
            $post->Investigation_officer=$request->Investigation_officer;
            $post->Police_Case_Ref=$request->Police_Case_Ref;
            $post->Inter_Ref_Number=$request->Inter_Ref_Number;
            $post->Transmission_Line=$request->Transmission_Line;
            $post->Case_Status=$request->Case_Status;
            $post->particulars_of_the_case=$request->particulars_of_the_case;
            $post->Brief_facts_of_the_case=$request->Brief_facts_of_the_case;
            $post->Date=$request->Date;

            $save=$post->save();

            if($save)
            {   
                return redirect()->back()->with('success','Case has been recorded successfully');
            }
        }

        public function case_records()
        {
             $data = register::all();

             return view('Adminpages.AllBooks',compact($data,'data'));
        }

        public function delete($id)
        {
            $data = register::find($id);
            $data->delete();

            return redirect()->back()->with('success','Case has been deleted successfully');;
        }

        public function update(Request $request)
        {
              $post = register::find($request->id);

              $request->validate([
                'police_station'=>'required',
                'Investigation_officer'=>'required',
                'Police_Case_Ref'=>'required',
                'Inter_Ref_Number'=>'required',
                'Transmission_Line'=>'required',
                'Case_Status'=>'required',
                'particulars_of_the_case'=>'required',
                'Brief_facts_of_the_case'=>'required',
                'Date'=>'required',
            ]);
                
            
            $post->police_station=$request->police_station;
            $post->Investigation_officer=$request->Investigation_officer;
            $post->Police_Case_Ref=$request->Police_Case_Ref;
            $post->Inter_Ref_Number=$request->Inter_Ref_Number;
            $post->Transmission_Line=$request->Transmission_Line;
            $post->Case_Status=$request->Case_Status;
            $post->particulars_of_the_case=$request->particulars_of_the_case;
            $post->Brief_facts_of_the_case=$request->Brief_facts_of_the_case;
            $post->Date=$request->Date;

            $save=$post->save();

            if($save)
            {   
                return redirect()->back()->with('success','Book has been Updated successfully');
            }
            
        }

        public function AddRecord()
        {
            $officers = officer::all();
            return view('Adminpages.AddBook',compact('officers',$officers));
        }
        public function updateRecord($id,Request $request)
        {
              $info = register::find($id);
              $officers = officer::all();

              return view('Adminpages.EditBook',compact(['info','officers']));
        }


        public function details($id,Request $request)
        {
             $data = register::find($id);
             return view('Adminpages.BookDetails',compact('data',$data));
        }

        public function Add_officer(Request $request)
        {
            $request->validate([
                'Firstname'=>'required',
                'Lastname'=>'required',
                'Department'=>'required',
                'Role'=>'required',
            ]);

            $post = new officer();
            $post->Firstname=$request->Firstname;
            $post->Lastname=$request->Lastname;
            $post->Department=$request->Department;
            $post->Role=$request->Role;
            
            $save=$post->save();

            if($save)
            {   
                return redirect()->back()->with('success','Officer has been recorded successfully');
            }
        }

        public function Officer_records()
        {
            $data = officer::all();
             return view('Adminpages.AllOfficers',compact('data',$data));
        }

        public function delete_officer($id)
        {
            $data = officer::find($id);
            $data->delete();

            return redirect()->back()->with('success','Officer has been deleted successfully');;
        }

        public function update_officer(Request $request)
        {
            $post = officer::find($request->id);

            $request->validate([
                'Firstname'=>'required',
                'Lastname'=>'required',
                'Department'=>'required',
                'Role'=>'required',
            ]);

            $post->Firstname=$request->Firstname;
            $post->Lastname=$request->Lastname;
            $post->Department=$request->Department;
            $post->Role=$request->Role;
            
            $save=$post->save();

            if($save)
            {   
                return redirect()->back()->with('success','Officer has been updated successfully');
            }
        }

        public function update_Officer_Record($id,Request $request)
        {
             $info = officer::find($id);
             
             return view('Adminpages.EditOfficer',compact('info',$info));
        }

        public function Pending_records()
        {
            $pendings = register::where('Case_Status','court')->get();

             return view('Adminpages.pending',compact('pendings',$pendings));
        }
}

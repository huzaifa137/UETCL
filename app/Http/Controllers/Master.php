<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\register;
use App\Models\court;
use App\Models\officer;
use App\Models\admin;
use App;

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

             return view('Adminpages.AllBooks',compact(['data']));
        }

        public function delete($id)
        {
            $data = register::find($id);
            $data->delete();

            return redirect()->back()->with('success','Case has been deleted successfully');
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
                return redirect()->back()->with('success','Record has been Updated successfully');
            }
            
        }

        public function AddRecord()
        {
            $officers = officer::all();
            return view('Adminpages.AddBook',compact(['officers']));
        }
        public function updateRecord($id,Request $request)
        {
              $info = register::find($id);
              $officers = officer::all();

              return view('Adminpages.EditBook',compact(['info','officers']));
        }

        public function details1($id,Request $request)
        {
             $data = register::find($id);
             return view('Adminpages.onerecord',compact(['data']));
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
             return view('Adminpages.AllOfficers',compact(['data']));
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
             
             return view('Adminpages.EditOfficer',compact(['info']));
        }

        public function Pending_records()
        {
            $pendings = register::where('Case_Status','court')->get();
            return view('Adminpages.pending',compact(['pendings']));
        }

        public function Update_case_status($id,Request $request)
        {   
            $info = register::find($id);
            return view('Adminpages.case_status',compact(['info']));
        }

        public function update_status(Request $request)
        {
              $update_id = register::find($request->id);
              $data = $update_id->id;

            $request->validate([
                'CRB'=>'required',
                'Police_station_case_Ref'=>'required',
                'Case_parties_UG_vs'=>'required',
                'Due_Date'=>'required',
                'Police__IOs'=>'required',
                'Witnesses'=>'required',
                'Evidence_on_Record'=>'required',
                'Case_facilitation'=>'required',
            ]);

            $post = new court();

            $post->CRB = $request->CRB;
            $post->Police_station_case_Ref = $request->Police_station_case_Ref;
            $post->Case_parties_UG_vs = $request->Case_parties_UG_vs;
            $post->Due_Date = $request->Due_Date;
            $post->Police__IOs = $request->Police__IOs;
            $post->Witnesses = $request->Witnesses;
            $post->Evidence_on_Record = $request->Evidence_on_Record;
            $post->Case_facilitation = $request->Case_facilitation;
            $new_status = $request->Status;
            $post->Status = $new_status;

            $save=$post->save();

            $update_query=register::where('id',$data)->update(['Case_Status'=>$new_status]);

            if($save)
            {   
                return redirect()->back()->with('success','Case has been recorded and updated successfully');
            }
            else{
                return "Case has not been recorded and updated";
            }
        }

        public function court_case_status()
        {
            $data = court::all();
            return view('Adminpages.CourtStatus',compact(['data']));
        }

        public function generator()
        {
            $data = register::all();
            $pdf = Pdf::loadView('Adminpages.records',compact(['data']));
            return $pdf->download('generalcasereport.pdf');
        }

       

        public function officer_report_download()
        {
            $data = officer::all();
            $pdf = Pdf::loadView('Adminpages.record2',compact(['data']));
            return $pdf->download('OfficerReport.pdf');
        }

        public function records()
        {
            return view('Adminpages.records');
        }

        public function general_records()
        {
            $data = register::all();
            return view('Adminpages.GeneralCaseRecords',compact(['data']));
        }

        public function officerReportrecords()
        {

            $data = officer::all();
            return view('Adminpages.OfficerReportRecords',compact(['data']));
        }

        public function case_in_courts()
        {
            $data = court::all();
            return view('Adminpages.CourtReport',compact(['data']));
        }

        public function year_case_report()
        {
            return view('Adminpages.YearCaseReport');
        }

        public function custom_year_search(Request $request)
        {
             $keyword =  $request->year;

             $date = new Carbon( $keyword); 
             $value = $date->year;

              $data = DB::table('registers')
                ->where('Date', '>=',$value.'01'.'01' )
                ->where('Date', '<=', $value.'12'.'31')
                ->get();

                 
            $this->year_report_download($value);
                
            return view('Adminpages.CaseReportRecords',compact(['data','value']));
        }

        public function year_report_download($value)
        {

              $value;
             
              $data = DB::table('registers')
             ->where('Date', '>=',$value.'01'.'01' )
             ->where('Date', '<=', $value.'12'.'31')
             ->get();

    
             $pdf = Pdf::loadView('Adminpages.record1',compact(['data']));
            return $pdf->download('Annualcasereport.pdf');
        }

        public function details()
        {
             $datas = DB::table('registers')->Simplepaginate(1);

             $datas = DB::table('registers')->Simplepaginate(1);

              foreach ($datas as $val) {
                $value=$val->id;
                }

              $this->IndividualGenerator($value);
              return view('Adminpages.BookDetails',compact(['datas','value']));


            //  return view('Adminpages.BookDetails',compact(['datas']));
        }


         // Modified Documents

         public function dummy()
         {
              $datas = DB::table('registers')->Simplepaginate(1);

              foreach ($datas as $val) {
                $value=$val->id;
                }

              $this->IndividualGenerator($value);
              return view('Adminpages.dummy',compact(['datas','value']));
         }
 
         public function IndividualGenerator($value)
         {
             $data = register::find($value);
             $pdf = Pdf::loadView('Adminpages.record3',compact(['data']));
             return $pdf->download('IndividualCaseDetails.pdf');
         }
}

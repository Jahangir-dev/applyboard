<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Country;
use App\Models\Province;

use Session;

class StudentController extends Controller
{
    public function  student_register(Request $req)
    {
        //  

        $validator = Validator::make($req->all(), [
            'email' => 'required|email|unique:Students',
            'name' => 'required|string|max:50',
            'password' => 'required',
            'con_password' => 'required|same:password'
        ]);

        if ($validator->fails()) {
            return Redirect()->back()->withErrors($validator);
            // Session::flash('error', $validator->messages()->first());
            // return redirect()->back()->withInput();
        }
       
        $Student = new Student();
        $Student->name = $req->name;
        $Student->email = $req->email;
        $Student->password = Hash::make($req->password);
       
        $Student->save();
        return redirect()->route('Student.login');
       
    }

    public function  Userlogin(Request $req)
    {

        $Student = Student::where(['email' => $req->email])->first();

        if (!$Student || !Hash::check($req->password, $Student->password)) {
            return Redirect()->back()->withErrors("Invalid user or password");
        } else {
          
            $req->session()->put('user', $Student);
          //  Auth::login($Student);

            return view("users/dashboard");
        }
    }
    public function logout()
    {

        try {
            
        Session::forget('user');
     ///   Auth::logout();
        
        } catch (\Throwable $th) {
            //throw $th;
        }

        return redirect("/");
    }
   public function student_program()
   {
       $country = Country::all();
       $Province = Province::all();


       return view('users.program_school' ,['country'=>$country , 'province'=>$Province]);
   }

   public function student_profile()
   {
       return view("users.profile");
   }


   public function student_home()
   {
       return view('users.home');
   }

   public function student_application()
   {
       return view('users.application');
   }

   public function student_payment()
   {
    return view('users.payment');
   }
}

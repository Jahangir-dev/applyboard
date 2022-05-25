<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;
use App\Models\Province;


use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    //

    public function login()
    {
        return view('admin.login');
    }
    public function  adminlogin(Request $req)
    {

        $admin = User::where(['email' => $req->email])->first();

        if (!$admin || !Hash::check($req->password, $admin->password)) {
            return Redirect()->back()->withErrors("Invalid user or password");
        } else {
          
            $req->session()->put('admin', $admin);
          //  Auth::login($Student);

            return view("admin/dashboard");
        }
    }
    public function logout()
    {

        try {
            
        Session::forget('admin');
     ///   Auth::logout();
        
        } catch (\Throwable $th) {
            //throw $th;
        }

        return redirect("/");
    }
    public function add_Country()
    {
        return view('admin.add_country');
    }  
    public function Country(Request $req)
    {
        $Country  = new Country();
        $Country->name = $req->title;
        $Country->save();
        return redirect()->route('admin.Country.all');
       
    }  
    public function all_Country()
    {
        $lottery =  Country::paginate(5);
        // dd($lottery);
        return view('admin.all_countery',['lottery'=>$lottery]);  
    }
    public function add_province(Request $req)
    {
        $id  = $req->id;
        $Country =Country::find($id);
        $Province =new Province();
        $Province->title =$req->title; 
        $Country->Province()->Save($Province);
    }

    public function province($id)
    {
        return view('admin.add_province' ,['id'=>$id]);
        
    }
    public function show_province($id)
    {
        $province =Country::find($id)->Province;
        
        return view('admin.show_province', ['province'=>$province]);
    }

    public function get_province($id)
    {
        $province =Country::find($id)->Province;
        if($province)
        {
            return response()->json([
                'status' =>200,
                'province' =>$province
       ]);

        }
        else
        {
            return response()->json([
                'status' =>404,
                'msg' =>"Data Not Found"
            ]);
        }
      
    }
    
}

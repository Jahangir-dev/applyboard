<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;
use App\Models\EducationLevel;
use App\Models\Country;
use App\Models\Province;
use App\Models\Courses;

class CoursesController extends Controller
{
    //

    public function add_course()
    {
        $country = Country::all();
        $Education = Education::all();
        $Province = Province::all();

        return view('admin.add_Course',['country'=>$country , 'Education'=>$Education ,'Province'=>$Province]);
    }
    public function  create_course(Request $req)
    {
        $Courses  = new Courses();
        $Courses->title = $req->Ctitle;
        $Courses->University = $req->Uname;
        $Courses->Country = $req->country;
        $Courses->Province = $req->province;
        $Courses->Education = $req->edu;
        $Courses->Education_level = $req->Elevel;
        $Courses->Program = $req->Pname;
        $Courses->Tution_fee = $req->Tfee;
        $Courses->Application_fee = $req->Afee;
        $Courses->campus = $req->campus;
        $Courses->save();
        return redirect()->back();

    }


   public function search_course(Request $req)
   {
        return $req;
      return  Courses::query()
          ->where('Country', 'LIKE', "%{$req->country}%") 
          ->Where('Province', 'LIKE', "%{$req->province}%") 
          ->Where('campus', 'LIKE', "%{$req->campus}%") 

          ->get();
   }
}

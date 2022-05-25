<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;
use App\Models\EducationLevel;
class EducationController extends Controller
{
    //
    public function add_Education()
    {
        return view('admin.add_education');
    }
    public function Create_Education(Request $req)
    {
        $Country  = new Education();
        $Country->name = $req->title;
        $Country->save();
        return redirect()->route('admin.all_Education');
    }
    public function all_Education()
    {
        $Education =  Education::paginate(5);
        // dd($lottery);
        return view('admin.all_education',['Education'=>$Education]);  
        
    }
    public function add_Level(Request $req)
    {
        $id  = $req->id;
        $Country =Education::find($id);
        $EducationLevel =new EducationLevel();
        $EducationLevel->title =$req->title; 
        $Country->EduLevel()->Save($EducationLevel);
        return redirect()->route('admin.all_Education');
    }
    public function add_edu_Level($id)
    {
        return view('admin.add_edu_level' ,['id'=>$id]);
        
    }
    public function show_edu_Level($id)
    {
        $level =Education::find($id)->EduLevel;
        return view('admin.show_edu_level', ['level'=>$level]);
    }
}

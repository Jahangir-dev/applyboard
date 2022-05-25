<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AmbassadorsController extends Controller
{
    //



        

    public function ambassdor_home()
    {
        return view('ambassador.dashboard');
    }
    
    public function ambassdor_student()
    {
        return view('ambassador.student');
    }
    
    public function ambassdor_payment()
    {
        return view('ambassador.payment');
    }
}

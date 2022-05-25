<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnerController extends Controller
{
    //

    public function partner_home()
    {
        return view('partners.dashboard');
    }

    public function partner_program()
    {
        return view('partners.program_school');
    }
    public function partner_student()
    {
        return view('partners.student');
    }
    public function partner_application()
    {
        return view('partners.application');
    }
    public function partner_payment()
    {
        return view('partners.payment');
    }

    public function partner_growth()
    {
        return view('partners.growthhub');
    }
}

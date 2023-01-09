<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class AccountStudentController extends Controller
{
    public function index()
    {
        return view('admins.students.index');
    }
}

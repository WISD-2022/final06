<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;

class LoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /* public function __construct()
     {
         $this->middleware('index');
     }
 */
     /**
      * Show the application dashboard.
      *
      * @return \Illuminate\Contracts\Support\Renderable
      */
   /* public function index()
    {
        $role=Auth::user()->role;
        if($role=='1')
        {
            return view('student_id');
        }
        else
        {
            return view('number');
        }

    }*/

    public function login(Request $res)
    {
        $acc=$res->input('student_id');
        $pw=$res->input('number');
        $chk=Student::where('student_id',$acc)->where('number',$pw)->count();
        if($chk) {
            //帳號密碼正確導入學生介面
            return redirect('/students');
        }
        else {
            //帳號密碼錯誤顯示錯誤訊息
            return redirect('/login')->with('error','帳號或密碼錯誤');
        }
    }

}


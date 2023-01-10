<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('teachers.index');
    }
    public function list()
    {
        //取得當前使用者的假單
        $user=Auth::user();
        //取得學生id為1的假單
        $leaves=Leave::where('student_id','=',$user->id)->get();
        $data=[
            'leaves'=>$leaves
        ];
        return view('teachers.list',$data);
    }
    public function uncheck()
    {
        $array=array();
        $count=0;

        //取得當前使用者學生的假單
        $users=Auth::User();
        //$teacher=Teacher::where('user_id','=',$user->id)->get();//取得當前使用者的id
//        foreach ($users as $user){
//            echo $users;
            $teachers=$users->teacher()->get();//取得與user相關的teacher資料列


        foreach ($teachers as $teacher)
            {
                    $teams=$teacher->team()->get();//取得與teacher相關的team資料列
                foreach ($teams as $team)
                {

                    $students=$team->student()->get();//取得與team相關的student資料列
                    foreach ($students as $student)
                        {
                            //透過student取得user的資料
                        $leaves=$student->leave()->get();//$leaves=Leave::where('student_id','=',$student->department_id)->get();

                        foreach ($leaves as $leave)
                        {

                            $array = Arr::add($array, $count, $leave);
                            $count++;
                            //echo $array;
//                            echo $leave;
                        }
                    }
                }
            }

//        }

     //取得學生id為1的假單
     $data=[
            'array'=>$array
      ];
      return view('teachers.uncheck',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Leave $leave)
    {
        $data=[
            'leave'=>$leave
        ];
        return view('teachers.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{

    public function index()
    {
        return view('students.index');
    }
    public function list()
    {
        //取得當前使用者的假單
        $user=Auth::user();
        $students=$user->student()->get();
        //取得學生id為1的假單
        foreach ($students as $student){
            $leaves=Leave::where('student_id','=',$student->id)->get();
        }
        $data=[
          'leaves'=>$leaves
        ];
        return view('students.list',$data);
    }
    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        //資料驗證
        $this->validate($request,[
            'leave'=>'required',
            'start_time'=>'required|date',
            'end_time'=>'required|date',
            'reason'=>'required|max:255',
            'remark'=>'required|max:255',
            'picture'=>'image',
        ]);
        //儲存圖片
        if ($request->hasFile('picture')){
            //自訂檔案名稱
            $imageName = time().'.'.$request->file('picture')->extension();
            //把檔案儲存到公開資料夾
            $request->file('picture')->move(public_path('/images'),$imageName);
        }
        //登入者身分(未完成)
        $user=Auth::user();
        $students=$user->student()->get();
        foreach ($students as $student){
            $studentid=$student->id;
        }
        //取得現在時間
        $application_date=date('y/n/j');
        //儲存資料
        Leave::create([
            'student_id'=>$studentid,//待修改
            'application_date'=>$application_date,
            'leave'=>$request->leave,
            'reason'=>$request->reason,
            'picture'=>$imageName,
            'start_time'=>$request->start_time,
            'end_time'=>$request->end_time,
            'remark'=>$request->remark,
        ]);
        echo 12;
        return redirect()->route('students.list');
    }

    public function show(Leave $leave)
    {
        $data=[
          'leave'=>$leave
        ];
        return view('students.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    public function destroy(Leave $leave)
    {
        //取得硬碟實例
        $disk=Storage::disk('images');
        //刪除指定檔案
        $disk->delete($leave->picture);
        Leave::destroy($leave->id);
        return redirect()->route('students.list');

    }
}

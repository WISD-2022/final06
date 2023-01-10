<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Student;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;


class AccountStudentController extends Controller
{
    public function index()
    {
        $array=array();
        $count=0;
        $students=Student::all();//三維陣列
        foreach ($students as $student) {
            $teams = $student->team()->get();//三維
            $users = $student->user()->get();
            foreach ($teams as $team) {
                $departments=$student->department()->get();
                foreach ($departments as $department) {
                    foreach ($users as $user) {
                    //array為三維陣列
                    //取得值得方式為，foreach($array as $array_item){$array_item['key值']}
                    $array = Arr::add($array, $count, [
                        //'key值'=>value
                        'id'=>$student->id,
                        'department' => $department->name,
                        'team' => $team->class,
                        'student' =>$user->name,
                    ]);
                    $count++;
                    }
                }
            }
        }
       $data=[
           'array'=>$array,
       ];
        return view('admins.students.index',$data);
    }

    public function create(){
        //取得科系名稱
        $departments=Department::all();
        //取得班級名稱
        $teams=Team::all();
        $data=[
            'departments'=>$departments,
            'teams'=>$teams,
        ];
        return view('admins.students.create',$data);
    }

    public function store(Request $request){
        //資料驗證
        $this->validate($request,[
            'name'=>'required',
            'student_id'=>'required',
            'department'=>'required',
            'team'=>'required',
            'sex'=>'required',
            'number'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);
        echo $request->team;
            echo $request->sex;
        //將密碼加密(使用哈希加密方式)
        $password=Hash::make($request->password);
        //儲存資料至users
        $user=User::create([
            'type'=>'1',
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$password,
        ]);
//        //儲存資料至students
        Student::create([
           'user_id'=>$user->id,
            'department_id'=>$request->department,
            'team_id'=>$request->team,
            'student_id'=>$request->student_id,
            'sex'=>$request->sex,
            'number'=>$request->number,
        ]);
        return redirect()->route('admins.students.index');
    }

    public function show(Student $student){
        $array=[];
        $teams=$student->team()->get();
        foreach ($teams as $team){
            $departments=$student->department()->get();
            foreach ($departments as $department){
                $users=$student->user()->get();
                foreach ($users as $user){
                    $array=[
                        'id'=>$student->id,
                        'name'=>$user->name,
                        'student_id'=>$student->student_id,
                        'department'=>$department->name,
                        'team'=>$team->class,
                        'sex'=>$student->sex,
                        'number'=>$student->number,
                        'email'=>$user->email,
                        'password'=>$user->password,
                    ];
                }

            }
        }
        $data=[
            'array'=>$array
        ];
        return view('admins.students.show',$data);
    }

    public function edit(Student $student){
        //取得科系名稱
        $departments_all=Department::all();
        //取得班級名稱
        $teams_all=Team::all();
        //取得欄位資料
        $array=[];
        $teams=$student->team()->get();
        foreach ($teams as $team){
            $departments=$student->department()->get();
            foreach ($departments as $department){
                $users=$student->user()->get();
                foreach ($users as $user){
                    $array=[
                        'id'=>$student->id,
                        'name'=>$user->name,
                        'student_id'=>$student->student_id,
                        'department'=>$department->name,
                        'team'=>$team->class,
                        'sex'=>$student->sex,
                        'number'=>$student->number,
                        'email'=>$user->email,
                        'password'=>$user->password,
                    ];
                }

            }
        }
        $data=[
            'array'=>$array,
            'departments'=>$departments_all,
            'teams'=>$teams_all,
        ];
        return view('admins.students.edit',$data);
    }

    public function update(Request $request,Student $student){
        //查詢相關user資料
        $user=User::find($student->user_id);
        echo $student;
        //更新資料至users
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
        ]);
        //儲存資料至students
        $student->update([
            'department_id'=>$request->department,
            'team_id'=>$request->team,
            'student_id'=>$request->student_id,
            'sex'=>$request->sex,
            'number'=>$request->number,
        ]);
        return redirect()->route('admins.students.index');
    }
    public function destroy(Student $student){
        $user=User::find($student->user_id);
        echo $user;
        Student::destroy($student->id);
        User::destroy($user->id);
        return redirect()->route('admins.students.index');
    }
}

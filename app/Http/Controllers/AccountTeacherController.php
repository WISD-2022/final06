<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Teacher;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

class AccountTeacherController extends Controller
{

    public function index()
    {
        $array=array();
        $count=0;
        $teachers=Teacher::all();//三維陣列
        foreach ($teachers as $teacher) {
            $teams = $teacher->team()->get();//三維
            $users = $teacher->user()->get();
            foreach ($teams as $team) {
                $departments=$teacher->department()->get();
                foreach ($departments as $department) {
                    foreach ($users as $user) {
                        //array為三維陣列
                        //取得值得方式為，foreach($array as $array_item){$array_item['key值']}
                        $array = Arr::add($array, $count, [
                            //'key值'=>value
                            'id'=>$teacher->id,
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
        return view('admins.teachers.index',$data);
    }

    public function create()
    {
        //取得科系名稱
        $departments=Department::all();
        //取得班級名稱
        $teams=Team::all();
        $data=[
            'departments'=>$departments,
            'teams'=>$teams,
        ];
        return view('admins.teachers.create',$data);
    }

    public function store(Request $request)
    {
        //資料驗證
        $this->validate($request,[
            'name'=>'required',
            'department'=>'required',
            'team'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);
        //將密碼加密(使用哈希加密方式)
        $password=Hash::make($request->password);
        //儲存資料至users
        $user=User::create([
            'type'=>'1',
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$password,
        ]);
//        //儲存資料至teachers
        Teacher::create([
            'user_id'=>$user->id,
            'department_id'=>$request->department,
            'team_id'=>$request->team,
        ]);
        return redirect()->route('admins.teachers.index');
    }

    public function show(Teacher $teacher)
    {
        $array=[];
        $teams=$teacher->team()->get();
        foreach ($teams as $team){
            $departments=$teacher->department()->get();
            foreach ($departments as $department){
                $users=$teacher->user()->get();
                foreach ($users as $user){
                    $array=[
                        'id'=>$teacher->id,
                        'name'=>$user->name,
                        'department'=>$department->name,
                        'team'=>$team->class,
                        'email'=>$user->email,
                        'password'=>$user->password,
                    ];
                }

            }
        }
        $data=[
            'array'=>$array
        ];
        return view('admins.teachers.show',$data);
    }

    public function edit(Teacher $teacher)
    {
        //取得科系名稱
        $departments_all=Department::all();
        //取得班級名稱
        $teams_all=Team::all();
        //取得欄位資料
        $array=[];
        $teams=$teacher->team()->get();
        foreach ($teams as $team){
            $departments=$teacher->department()->get();
            foreach ($departments as $department){
                $users=$teacher->user()->get();
                foreach ($users as $user){
                    $array=[
                        'id'=>$teacher->id,
                        'name'=>$user->name,
                        'department'=>$department->name,
                        'team'=>$team->class,
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
        return view('admins.teachers.edit',$data);
    }

    public function update(Request $request, Teacher $teacher)
    {
        //查詢相關user資料
        $user=User::find($teacher->user_id);
        //更新資料至users
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
        ]);
        //儲存資料至students
        $teacher->update([
            'department_id'=>$request->department,
            'team_id'=>$request->team,
        ]);
        return redirect()->route('admins.teachers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $array=array();
        $count=0;
        $teachers=Teacher::all();//三維陣列
        foreach ($teachers as $teacher) {
            $teams = $teacher->team()->get();//三維
            $users = $teacher->user()->get();
            foreach ($teams as $team) {
                $departments=$team->department()->get();
                foreach ($departments as $department) {
                    foreach ($users as $user) {
                        //array為三維陣列
                        //取得值得方式為，foreach($array as $array_item){$array_item['key值']}
                        $array = Arr::add($array, $count, [
                            //'key值'=>value
                            'id'=>$teacher->id,
                            'department' => $department->name,
                            'team' => $team->class,
                        ]);
                        $count++;
                    }
                }
            }
        }
        $data=[
            'array'=>$array,
        ];
        return view('admins.departments.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        return view('admins.departments.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //資料驗證
        $this->validate($request,[
            'department'=>'required',
            'team'=>'required',
        ]);
        echo $request->team;
        //儲存資料至users
        $user=User::create([
            'type'=>'1',
        ]);
        //儲存資料至teams
        Team::create([
            'team_id'=>$request->team,
            'department_id'=>$request->department,
        ]);
        return redirect()->route('admins.departments.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        $array=[];
        $teams=$department->team()->get();
        foreach ($teams as $team){
            $teachers=$team->teacher()->get();
            foreach ($teachers as $teacher){
                $users=$teacher->user()->get();
                foreach ($users as $user){
                    $array=[
                        'id'=>$teacher->id,
                        'department'=>$department->name,
                        'team'=>$team->class,
                    ];
                }
            }
        }
        $data=[
            'array'=>$array
        ];
        return view('admins.departments.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        //取得班級名稱
        $teams_all=Team::all();
        //取得科系名稱
        $departments_all=Department::all();
        //取得欄位資料
        $array=[];
        $teams=$department->team()->get();
        foreach ($teams as $team){
            $teachers=$team->teacher()->get();
            foreach ($teachers as $teacher){
                $users=$teacher->user()->get();
                foreach ($users as $user){
                    $array=[
                        'id'=>$user->id,
                        'department'=>$department->name,
                        'team'=>$team->class,
                    ];
                }
            }
        }
        $data=[
            'array'=>$array,
            'departments'=>$departments_all,
            'teams'=>$teams_all,
        ];
        return view('admins.department.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        //儲存資料至teams
        $department->update([
            'department_id'=>$request->department,
            'team_id'=>$request->team,
        ]);
        return redirect()->route('admins.departments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        $user=User::find($department->user_id);
        echo $user;
        Student::destroy($department->id);
        User::destroy($user->id);
        return redirect()->route('admins.departments.index');
    }
}

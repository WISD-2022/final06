<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

class TeamController extends Controller
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
        $teams=Team::all();
            foreach ($teams as $team) {
                $departments=$team->department()->get();
                foreach ($departments as $department) {
                    //array為三維陣列
                    //取得值得方式為，foreach($array as $array_item){$array_item['key值']
                    $array = Arr::add($array, $count, [
                        //'key值'=>value
                        'id'=>$team->id,
                        'team' => $team->class,
                        'department' => $department->name,
                    ]);
                    $count++;

                }
            }

        $data=[
            'array'=>$array,
        ];
        return view('admins.teams.index',$data);
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
        $data=[
            'departments'=>$departments,
        ];
        return view('admins.teams.create',$data);
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
            'team'=>'required',
            'department'=>'required',
            'admission'=>'required',
        ]);
         //儲存資料至teams
        Team::create([
            'department_id'=>$request->department,
            'class'=>$request->team,
            'admission'=>$request->admission,
        ]);
        return redirect()->route('admins.teams.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        $array=[];
        $departments=$team->department()->get();
        foreach ($departments as $department){
                    $array=[
                        'id'=>$team->id,
                        'admission'=>$team->admission,
                        'team'=>$team->class,
                        'department'=>$department->name,

                    ];


        }
        $data=[
            'array'=>$array
        ];
        return view('admins.teams.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $teams
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        //取得科系名稱
        $departments_all=Department::all();
        //取得欄位資料
        $array=[];
        $departments=$team->department()->get();
        foreach ($departments as $department){
                    $array=[
                        'id'=>$team->id,
                        'team'=>$team->class,
                        'department'=>$department->name,
                        'admission'=>$team->admission,
                    ];


        }
        $data=[
            'array'=>$array,
            'departments'=>$departments_all,
        ];
        return view('admins.teams.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {

        //儲存資料至teams
        $team->update([
            'department_id'=>$request->department,
            'class'=>$request->team,
            'admission'=>$request->admission,
        ]);
        return redirect()->route('admins.teams.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        
        Team::destroy($team->id);
        return redirect()->route('admins.teams.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

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
                            'team' => $team->class,
                            'department' => $department->name,
                            'teacher' =>$user->name,
                        ]);
                        $count++;
                    }
                }
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
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
    }
}

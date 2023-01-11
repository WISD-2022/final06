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
       $department=Department::all();
        $data=[
            'department'=>$department,
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
        ]);
        echo $request->team;
        //儲存資料至teams
        Department::create([
            'name'=>$request->department,
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

    }

    public function edit(Department $department)
    {

        $data=[
            'department'=>$department,
        ];
        echo 'OKK';
        return view('admins.departments.edit',$data);
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
            'name'=>$request->department,
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
        Department::destroy($department->id);
        return redirect()->route('admins.departments.index');
    }
}

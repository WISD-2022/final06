<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;


class AccountStudentController extends Controller
{
    public function index()
    {
        $array=array();
        $count=0;
        $students=Student::all();
        foreach ($students as $student) {
            $teams = $student->team()->get();
            $users = $student->user()->get();
            foreach ($teams as $team) {
                $departments=$team->department()->get();
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
}

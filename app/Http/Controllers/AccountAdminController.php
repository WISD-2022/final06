<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AccountAdminController extends Controller
{

    public function index()
    {
        $users=User::where('type','=','0')->get();
        $data=[
            'users'=>$users
        ];
        return view('admins.admins.index',$data);
    }

    public function create()
    {
        return view('admins.admins.create');
    }

    public function store(Request $request)
    {
        User::create([
            'type'=>'0',
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);
        return redirect()->route('admins.list');
    }

    public function show(User $user)
    {
        $data=[
            'user'=>$user
        ];
        echo $user->id;
        return view('admins.admins.show',$data);
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

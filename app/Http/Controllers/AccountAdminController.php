<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        //將密碼加密(使用哈希加密方式)
        $password=Hash::make($request->password);
        User::create([
            'type'=>'0',
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$password,
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

    public function edit(User $user)
    {
        $data=[
            'user'=>$user,
        ];
        return view('admins.admins.edit',$data);
    }


    public function update(Request $request, User $user)
    {
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
        ]);
        return redirect()->route('admins.list');
    }

    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect()->route('admins.list');
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create(
            [//管理員
                'type'=>0,
                'name'=>'admin',
                'email'=>'admin@gmail.com',
                'password'=>'$2y$10$EfHSnowZ1S0gsGJjVV4v9.yXBKH9SSfGGvFgghVi2DtUasju/UQHK',//00000000
            ]);
        User::create(
            [//學生
                'type'=>1,
                'name'=>'student',
                'email'=>'student@gmail.com',
                'password'=>'$2y$10$EfHSnowZ1S0gsGJjVV4v9.yXBKH9SSfGGvFgghVi2DtUasju/UQHK',//00000000
            ]);
        User::create(
            [//教師
                'type'=>2,
                'name'=>'teacher',
                'email'=>'teacher@gmail.com',
                'password'=>'$2y$10$EfHSnowZ1S0gsGJjVV4v9.yXBKH9SSfGGvFgghVi2DtUasju/UQHK',//00000000
            ]);
    }
}
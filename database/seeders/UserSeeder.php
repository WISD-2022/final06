<?php

namespace Database\Seeders;

use App\Models\Leave;
use App\Models\Student;
use App\Models\Teacher;
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
        Student::truncate();
        Teacher::truncate();
        User::factory(
            [//管理員
                'type'=>0,
                'name'=>'admin',
                'email'=>'admin@gmail.com',
                'password'=>'$2y$10$EfHSnowZ1S0gsGJjVV4v9.yXBKH9SSfGGvFgghVi2DtUasju/UQHK',//00000000
            ])->create();
        User::factory(
            [//學生
                'type'=>1,
                'name'=>'student',
                'email'=>'student@gmail.com',
                'password'=>'$2y$10$EfHSnowZ1S0gsGJjVV4v9.yXBKH9SSfGGvFgghVi2DtUasju/UQHK',//00000000
            ])->has(Student::factory(1))->create();
        User::factory(
            [//教師
                'type'=>2,
                'name'=>'teacher',
                'email'=>'teacher@gmail.com',
                'password'=>'$2y$10$EfHSnowZ1S0gsGJjVV4v9.yXBKH9SSfGGvFgghVi2DtUasju/UQHK',//00000000
            ])->has(Teacher::factory(1))->create();

        User::factory(10)->has(Student::factory(1))->create();
        User::factory(10)->has(Teacher::factory(1))->create();
    }
}

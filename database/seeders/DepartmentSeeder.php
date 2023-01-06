<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Department::created([
            [
                'name'=>'資訊管理系',
            ],
            [
                'name'=>'企業管理系',
            ],
            [
                'name'=>'流通管理系',
            ]
        ]);
    }
}

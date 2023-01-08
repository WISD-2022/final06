<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Teacher;
use App\Models\Team;
use App\Models\User;
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
        Department::truncate();
        Team::truncate();
        Department::factory(4)->has(Team::factory(3))->create();
    }
}

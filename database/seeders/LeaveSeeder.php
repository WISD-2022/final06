<?php

namespace Database\Seeders;

use App\Models\Leave;
use App\Models\Student;
use http\Client\Curl\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeaveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Leave::truncate();
        Leave::factory(41)->create();
    }
}

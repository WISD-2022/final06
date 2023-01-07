<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(UserSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0;'); //關閉外鍵檢查
        $this->call(DepartmentSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;'); //開啟外鍵檢查
    }
}

<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $department=Department::find(rand(1,4));
        $teams=$department->team()->get();
        return [
            'department_id'=>$department->id,
            'team_id'=>$teams[rand(0,2)]->id,
        ];
    }
}

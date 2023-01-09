<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
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
            'student_id'=>$this->faker->numberBetween(1111111,9999999),
            'sex'=>rand(1,2),
            'number'=>$this->faker->personalIdentityNumber(),
        ];
    }
}

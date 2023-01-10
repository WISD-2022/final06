<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Leave>
 */
class LeaveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'student_id'=>rand(1,11),
            'application_date'=>$this->faker->date('y-m-d'),
            'leave'=>rand(1,3),
            'reason'=>$this->faker->text('200'),
            'picture'=>'1.jpg',
            'start_time'=>$this->faker->date('y-m-d'),
            'end_time'=>$this->faker->date('y-m-d'),
            'remark'=>$this->faker->text('200'),
        ];
    }
}

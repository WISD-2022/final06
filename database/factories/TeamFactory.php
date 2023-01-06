<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        do{
            $year=$this->faker->year();
            $a=substr($year,-4,-2);
        }while($a=='19');
        return [
            'class'=>$this->faker->text(20),
            'admission'=>$this->faker->year(),
        ];
    }
}

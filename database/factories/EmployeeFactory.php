<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'salary' => fake()->unique()->numberBetween(1000,10000),
            'department_id' => fake()->numberBetween(1,5),
            'dependent_id' => fake()->numberBetween(1,5),
        ];
    }
}

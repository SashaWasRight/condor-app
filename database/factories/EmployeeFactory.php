<?php

namespace Database\Factories;

use App\Models\Employee;
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
            'superior' => \App\Models\Manager::factory()->create(),
            'position' => 'Engineer',
            'startDate' => fake()->dateTimeBetween('-5 years','-6 months'),
            'endDate' => null
        ];
    }
}

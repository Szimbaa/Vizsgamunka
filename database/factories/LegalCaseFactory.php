<?php

namespace Database\Factories;

use App\Models\LegalCase;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<LegalCase>
 */
class LegalCaseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
      $start = fake()->dateTimeBetween('-1 year', '-1 month');
      $end = fake()->dateTimeBetween($start, 'now');

        return [
          'client_name' => fake()->name(),
            'opposing_party' => fake()->name(),
            'title' => fake()->sentence(3),
            'type' => fake()->randomElement(['Civil', 'Criminal', 'Administrative']),
            'description' => fake()->paragraph(),
            'status' => fake()->randomElement(['Open', 'In Progress', 'Closed']),
            'user_id' => fake()->numberBetween(1, 10),
            'pricing' => fake()->randomElement(['Hourly', 'Fixed', 'Retainer']),
            'total_work_hours' => fake()->randomFloat(2, 0, 200),
            'deadline' => fake()->date(),
            'notification' => fake()->randomElement(['Email', 'SMS', 'None']),
            'date' => fake()->date(),
            'closed' => fake()->boolean(),
            'elapsed_work_hours' => fake()->randomFloat(2, 0, 200),
            'work_start' => $start,
            'work_end' => $end,
        ];
    } 
}

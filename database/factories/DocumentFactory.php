<?php

namespace Database\Factories;

use App\Models\Document;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Document>
 */
class DocumentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
      return [
            'client_id' => fake()->numberBetween(1, 10),
            'case_id' => fake()->numberBetween(1, 10),
            'document_type' => fake()->randomElement(['contract', 'invoice', 'letter']),
            'upload_date' => fake()->date(),
            'note' => fake()->sentence(),
            'file' => 'documents/' . fake()->slug(2) . '.pdf',
            'invoice' => fake()->boolean(),
            'sender' => fake()->name(),
            'receiver' => fake()->name(),
        ];
    }
}
<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Name' => fake()->name(),
            'Email' => fake()->email(),
            'Subject' => fake()->sentence(3),
            'Content' => fake()->paragraph(3),
            'ReadCondition' =>fake()->numberBetween(1,0),

        ];
    }
}

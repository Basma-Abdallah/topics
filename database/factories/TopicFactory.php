<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Topic>
 */
class TopicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $cat_num=['1','2','3','5','4'];
        return [

                'Title' => fake()->Unique()->sentence(2),
                'Content' => fake()->paragraph(3),
                'NumberOfViews' => fake()->randomNumber(1,100),
                'Published' =>fake()->numberBetween(1,0),
                'Trending' => fake()->numberBetween(1,0),
                'Category_id'=>fake()->randomElement($cat_num),
                // 'image'=>basename(fake()->image(public_path('assets/images/topics'))),
            ];

    }
}

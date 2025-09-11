<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'slug' => fake()->slug(),
            'author_id' => User::factory(),
            'category_id' => Category::factory(),
            'body' => fake()->realTextBetween(minNbChars: 600, maxNbChars: 1800),
        ];
    }

    public function withCategories($min = 1, $max = 3)
    {
        return $this->afterCreating(function (Post $post) use ($min, $max) {
            $count = rand($min, $max);
            $categories = Category::inRandomOrder()->take($count)->pluck('id');

            $post->categories()->attach($categories);
        });
    }

}

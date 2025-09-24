<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Tech Trends 2024',
                'slug' => 'tech-trends-2024',
                'body' => 'Latest technology trends for 2024.',
                'author_id' => 1,
                'category_id' => 1,
            ],
            [
                'title' => 'Healthy Living Tips',
                'slug' => 'healthy-living-tips',
                'body' => 'Tips for a healthier lifestyle.',
                'author_id' => 2,
                'category_id' => 2,
            ],
            [
                'title' => 'Education in Modern Era',
                'slug' => 'education-in-modern-era',
                'body' => 'How education is evolving.',
                'author_id' => 1,
                'category_id' => 3,
            ],
            [
                'title' => 'Traveling the World',
                'slug' => 'traveling-the-world',
                'body' => 'Best places to visit.',
                'author_id' => 2,
                'category_id' => 4,
            ],
            [
                'title' => 'Delicious Food Recipes',
                'slug' => 'delicious-food-recipes',
                'body' => 'Easy recipes for everyone.',
                'author_id' => 1,
                'category_id' => 5,
            ],
            [
                'title' => 'AI in Daily Life',
                'slug' => 'ai-in-daily-life',
                'body' => 'How AI is changing our routines.',
                'author_id' => 2,
                'category_id' => 1,
            ],
            [
                'title' => 'Mental Health Awareness',
                'slug' => 'mental-health-awareness',
                'body' => 'Importance of mental health.',
                'author_id' => 1,
                'category_id' => 2,
            ],
            [
                'title' => 'Online Learning Platforms',
                'slug' => 'online-learning-platforms',
                'body' => 'Best platforms for online learning.',
                'author_id' => 2,
                'category_id' => 3,
            ],
            [
                'title' => 'Budget Travel Tips',
                'slug' => 'budget-travel-tips',
                'body' => 'How to travel on a budget.',
                'author_id' => 1,
                'category_id' => 4,
            ],
            [
                'title' => 'Street Food Around the World',
                'slug' => 'street-food-around-the-world',
                'body' => 'Famous street foods globally.',
                'author_id' => 2,
                'category_id' => 5,
            ],
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}

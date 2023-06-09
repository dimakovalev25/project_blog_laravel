<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{

    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->text,
            'content' => $this->faker->text,
            'is_published' => 1,
            'likes' => random_int(1, 50),
            'category_id' => Category::get()->random()->id,


        ];
    }
}

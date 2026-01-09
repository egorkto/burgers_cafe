<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->text(),
            'price' => fake()->numerify("###"),
            'image' => 'placeholder.png',
            'category_id' => Category::inRandomOrder()->first()->id,
        ];
    }
}

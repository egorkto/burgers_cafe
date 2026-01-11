<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserRequestFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'message' => fake()->text(),
            'email' => fake()->email(),
            'phone_number' => fake()->phoneNumber(),
        ];
    }
}

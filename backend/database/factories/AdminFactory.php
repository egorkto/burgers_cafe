<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class AdminFactory extends Factory
{
    public function definition(): array
    {
        return [
            'email' => 'admin@mail.com',
            'password' => Hash::make('admin'),
            'name' => 'Admin',
            'avatar' => 'logo1.jpeg',
        ];
    }
}

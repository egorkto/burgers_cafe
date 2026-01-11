<?php

namespace Database\Seeders;

use App\Models\UserRequest;
use Illuminate\Database\Seeder;

class UserRequestSeeder extends Seeder
{
    public function run(): void
    {
        UserRequest::factory()->count(30)->create();
    }
}

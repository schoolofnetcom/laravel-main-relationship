<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::factory(10)
            ->has(\App\Models\Profile::factory(1))
            ->create();
    }
}

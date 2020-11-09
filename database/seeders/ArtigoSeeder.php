<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artigo;

class ArtigoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artigo::factory(10)
        ->has(\App\Models\Comment::factory(3))
        ->create();
    }
}

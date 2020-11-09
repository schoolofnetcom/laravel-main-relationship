<?php

namespace Database\Factories;

use App\Models\Artigo;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArtigoFactory extends Factory
{
    protected $model = Artigo::class;

    public function definition()
    {
        return [
            'title' => $this->faker->words(3, true),
            'content' => $this->faker->paragraphs(1, true),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SousCategorie>
 */
class SousCategorieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sous_categorie' => fake()->word(),
            'image' => fake()->imageUrl(640, 480, 'sous_categories', true),
            'categorie_id' => \App\Models\Categorie::factory(),
        ];
    }
}

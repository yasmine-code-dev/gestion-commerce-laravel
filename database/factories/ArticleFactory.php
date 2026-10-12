<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'designation' => fake()->word(),
            'prix_achat_ht' => fake()->randomFloat(2, 10, 1000),
            'prix_vente_ht' => fake()->randomFloat(2, 20,
            1500),
            'stock' => fake()->numberBetween(0, 500),               
            'sous_categorie_id' => \App\Models\SousCategorie::factory(),
            'tva' => fake()->randomFloat(2, 5, 20),
            'image' => fake()->imageUrl(640, 480, 'articles', true),
        ];
    }
}

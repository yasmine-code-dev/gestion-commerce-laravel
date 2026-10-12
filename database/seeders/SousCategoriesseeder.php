<?php

namespace Database\Seeders;

use App\Models\SousCategorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SousCategoriesseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SousCategorie::factory(100)->create();
    }
}

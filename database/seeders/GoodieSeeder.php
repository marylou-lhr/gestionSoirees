<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Goodie;

class GoodieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Goodie::create([
            'nom' => 'Bracelet lumineux LED',
            'quantite' => 9,
            'description' => 'Bracelet LED à lumière multicolore.',
            'coutUnitaire' => 1
        ]);
        Goodie::create([
            'nom' => 'Chapeau de fête',
            'quantite' => 2,
            'description' => 'Chapeau festif en carton.',
            'coutUnitaire' => 2
        ]);
        Goodie::create([
            'nom' => 'T-shirt BDE',
            'quantite' => 7,
            'description' => 'T-shirt avec le logo du BDE devant en haut à gauche et derrière au centre.',
            'coutUnitaire' => 20
        ]);
        Goodie::create([
            'nom' => 'Casquette BDE',
            'quantite' => 8,
            'description' => 'Casquette avec le logo du BDE brodé au centre.',
            'coutUnitaire' => 15
        ]);
        Goodie::create([
            'nom' => 'Gobelet réutilisable BDE',
            'quantite' => 4,
            'description' => 'Gobelet réutilisable avec le logo du BDE, facile à emporter.',
            'coutUnitaire' => 5
        ]);
        
    }
}

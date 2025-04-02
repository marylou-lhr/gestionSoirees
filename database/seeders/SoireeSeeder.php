<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Soiree;

class SoireeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Soiree::create([
            'nom' => 'Bal de promo',
            'lieu' => '123 Maple Street, Mapleton Heights',
            'prixEntree' => 17,
            'capaciteMax' => 43,
            'theme' => 'Chic',
        ]);
        Soiree::create([
            'nom' => 'Soirée Halloween',
            'lieu' => '456 Oak Avenue, Windstone Valley',
            'prixEntree' => 18,
            'capaciteMax' => 35,
            'theme' => 'Déguisé',
        ]);
        Soiree::create([
            'nom' => 'Soirée chic',
            'lieu' => '789 Pine Road, Silverbrook',
            'prixEntree' => 22,
            'capaciteMax' => 36,
            'theme' => 'Chic',
        ]);
        Soiree::create([
            'nom' => 'Soirée Années Disco',
            'lieu' => '101 Elm Drive, Flintstone Bay',
            'prixEntree' => 23,
            'capaciteMax' => 46,
            'theme' => 'Déguisé',
        ]);
    }
}

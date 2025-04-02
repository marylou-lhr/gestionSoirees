<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Reservation;

class ReservSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reservation::create([
            'nomEtud' => 'Portwaine',
            'emailEtud' => 'qportwaine0@gmail.com',
            'numTel' => '0612345678',
            'nomSoiree' => 'Bal de promo',
            'statutReserv' => 'Acceptee',
            'goodieAttribue' => 'T-shirt BDE'
        ]);
        Reservation::create([
            'nomEtud' => 'Rosenshine',
            'emailEtud' => 'hrosenshine1@gmail.com',
            'numTel' => '0698745632',
            'nomSoiree' => 'Soirée Halloween',
            'statutReserv' => 'Acceptee',
            'goodieAttribue' => 'Bracelet lumineux LED'
        ]);
        Reservation::create([
            'nomEtud' => 'Hassell',
            'emailEtud' => 'chassell3@gmail.com',
            'numTel' => '0691827364',
            'nomSoiree' => 'Soirée chic',
            'statutReserv' => 'En attente',
            'goodieAttribue' => 'Bracelet lumineux LED'
        ]);
        Reservation::create([
            'nomEtud' => 'Thurlow',
            'emailEtud' => 'bthurlow6@gmail.com',
            'numTel' => '0612983476',
            'nomSoiree' => 'Soirée Années Disco',
            'statutReserv' => 'En attente',
            'goodieAttribue' => 'Chapeau de fête'
        ]);
        Reservation::create([
            'nomEtud' => 'Collister',
            'emailEtud' => 'acollister9@gmail.com',
            'numTel' => '0684759623',
            'nomSoiree' => 'Soirée chic',
            'statutReserv' => 'Refuse',
            'goodieAttribue' => ''
        ]);
    }
}

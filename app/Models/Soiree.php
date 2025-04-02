<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soiree extends Model
{
    use HasFactory;

    public $primaryKey = 'nom';

    protected $fillable = [
        'lieu',
        'dateHeure',
        'prixEntree',
        'capaciteMax',
        'theme'
    ];
}

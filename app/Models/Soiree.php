<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soiree extends Model
{
    use HasFactory;

    public $primaryKey = 'id';

    protected $fillable = [
        'nom',
        'lieu',
        'dateHeure',
        'prixEntree',
        'capaciteMax',
        'theme'
    ];

    public $timestamps = false;
}

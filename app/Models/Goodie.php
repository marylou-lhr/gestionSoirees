<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goodie extends Model
{
    use HasFactory;

    public $primaryKey = 'id';

    protected $fillable = [
        'nom',
        'quantite',
        'description',
        'coutUnitaire'
    ];

    public $timestamps = false;
}

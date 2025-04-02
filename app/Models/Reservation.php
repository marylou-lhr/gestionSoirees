<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    public $primaryKey = 'emailEtud';

    protected $fillable = [
        'nomEtud',
        'numTel',
        'nomSoiree',
        'dateReserv',
        'statutReserv',
        'goodieAttribue'
    ];
}

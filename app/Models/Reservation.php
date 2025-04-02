<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    public $primaryKey = 'id';

    protected $fillable = [
        'nomEtud',
        'emailEtud',
        'numTel',
        'nomSoiree',
        'dateReserv',
        'statutReserv',
        'goodieAttribue'
    ];

    public $timestamps = false;
}

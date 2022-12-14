<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'nama',
        'mobil_id',
        'kilometer_awal',
        'tujuan',
        'durasi',
    ];

    public function car()
    {
        return $this->belongsTo(Car::class, 'mobil_id', 'id');
    }
}
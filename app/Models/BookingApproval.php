<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingApproval extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'user_id',
        'status',
    ];

    public function booking()
    {
        return $this->hasMany(Booking::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
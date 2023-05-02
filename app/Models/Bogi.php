<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bogi extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'train_id',
    ];

    // Bogi HasMany Seats
    public function seats(){
        return $this->hasMany(Seat::class, 'bogi_id', 'id');
    }
}

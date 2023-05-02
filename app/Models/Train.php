<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    protected $guarded = [];
//    Train Has Many Bogi
    public function bogis(){
        return $this->hasMany(Bogi::class, 'train_id', 'id');
    }
}

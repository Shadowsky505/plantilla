<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;


class Reserva extends Model
{
    use HasFactory;

    public function restaurante()
    {
        return $this->belongsTo(Restaurante::class);
    }
}

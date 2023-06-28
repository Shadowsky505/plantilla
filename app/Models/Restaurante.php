<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;


class Restaurante extends Model
{
    use HasFactory;
    protected $connection='mongodb';
    protected $collection='restaurantes';

    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }
}

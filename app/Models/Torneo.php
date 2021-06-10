<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Torneo extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $fillable =
    [
        'nombre',
        'deporte',
        'fecha',
        'hora'
    ];

    public function participantes()
    {
        return $this->hasMany(Participante::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $fillable =
    [
        'nombre',
        'apellidop',
        'apellidom',
        'edad',
        'torneo_id'
    ];

    public function torneo()
    {
        return $this->belongsTo(Torneo::class);
    }
}

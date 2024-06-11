<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Equipo extends Model
{
    use HasFactory;
    protected $table = 'equipos';
    public $timestamps = false;

    public function jugadores(): HasMany
    {
        return $this->hasMany(Jugador::class);
    }


    public function campeonatos(): BelongsToMany
    {
        return $this->BelongsToMany(Campeonato::class,'campeonato_id');
    }
}

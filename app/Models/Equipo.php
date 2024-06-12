<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Equipo extends Model
{
    use HasFactory;
    protected $table = 'equipos';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'juegos',
    ];

    public function jugadores(): HasMany
    {
        return $this->hasMany(Jugador::class);
    }

    public function campeonatos(): BelongsTo
    {
        return $this->belongsTo(Campeonato::class,'campeonato_id');
    }
}

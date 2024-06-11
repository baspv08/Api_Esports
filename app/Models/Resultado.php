<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Resultado extends Model
{
    use HasFactory;
    protected $table = "resultados";
    public $timestamps = false;

    public function partidos(): BelongsToMany
    {
        return $this->BelongsToMany(Partido::class,'partido_id');
    }
    public function equipos(): BelongsToMany
    {
        return $this->BelongsToMany(Equipo::class,'equipo_id');
    }
}

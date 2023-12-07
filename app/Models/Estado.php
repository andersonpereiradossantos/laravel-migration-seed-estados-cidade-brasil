<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Estado extends Model
{
    protected $fillable = [
        'nome',
        'uf'
    ];

    public function Cidade(): HasMany
    {
        return $this->hasMany(Cidade::class, 'estado_id');
    }
}

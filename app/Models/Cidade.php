<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cidade extends Model
{
    protected $fillable = [
        'estado_id',
        'nome'
    ];

    public function Estado(): BelongsTo
    {
        return $this->belongsTo(Estado::class, 'estado_id');
    }
}

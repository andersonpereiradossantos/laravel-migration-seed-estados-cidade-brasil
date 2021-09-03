<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $table = 'cidade';

    protected $primaryKey = 'codigo_uf';

    protected $fillable = [
        'codigo_uf','codigo_municipio','nome'
    ];
        
    public function Estado()
    {
        return $this->belongsTo(Estado::class, 'codigo_uf');
    }
}

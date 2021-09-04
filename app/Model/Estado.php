<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estado';

    protected $primaryKey = 'codigo_uf';

    protected $fillable = [
        'codigo_uf','uf','nome'
    ];
        
    public function Cidade()
    {
        return $this->hasMany(Cidade::class, 'codigo_uf');
    }
}

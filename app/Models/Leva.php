<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leva extends Model
{
    use HasFactory;
    protected $table = "levas";
    protected $fillable = ['dt_fabricacao', 'fervura_inicial', 'tempo_fervura', 'qtd_agua', 'qtd_fermento', 'fermentos_id', 'lupulos_id', 'tempo_fervura_final'];

    public function fermentos()
    {
        return $this->belongsTo("\App\Models\Fermento");
    }

    public function lupulos()
    {
        return $this->belongsTo("\App\Models\Lupulo");
    }

}
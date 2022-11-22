<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstiloLeva extends Model
{
    use HasFactory;
    protected $table = "estilo_levas";
    protected $fillable = ['tipo_leva', 'descricao', 'leva_id'];

    public function levas()
    {
        return $this->belongsTo("\App\Models\Leva");
    }

    public function receitas()
    {
        return $this->hasmany("\App\Models\Receita");
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receita extends Model
{
    use HasFactory;
    protected $table = 'receitas';
    protected $fillable = ['estiloLeva_id', 'lupulo_id', 'malte_id'];

    public function estiloLeva()
    {
        return $this->belongsTo("\App\Models\EstiloLeva");
    }

    public function lupulo()
    {
        return $this->belongsTo("\App\Models\Lupulo");
    }

    public function malte()
    {
        return $this->belongsTo("\App\Models\Malte");
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MalteLeva extends Model
{
    use HasFactory;
    protected $fillable = ['id_malte', 'id_leva', 'qtd'];
    protected $table = "malte_levas";


    public function malte()
    {
        return $this->belongsTo("\App\Models\Malte", 'id_malte');
    }

    public function leva()
    {
        return $this->belongsTo("\App\Models\Leva", 'id_leva');
    }
}
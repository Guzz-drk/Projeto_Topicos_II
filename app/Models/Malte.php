<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Malte extends Model
{
    use HasFactory;
    protected $table = "maltes";
    protected $fillable = ['nome', 'descricao'];

    public function malteLevas()
    {
        return $this->hasmany("\App\Models\MalteLeva");
    }

    public function receitas()
    {
        return $this->hasmany("\App\Models\Receita");
    }
}
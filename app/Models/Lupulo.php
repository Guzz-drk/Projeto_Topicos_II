<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lupulo extends Model
{
    use HasFactory;
    protected $table = "lupulos";
    protected $fillable = ['nome', 'descricao', 'origem'];

    public function levas()
    {
        return $this->hasMany("App\Models\Leva");
    }
}
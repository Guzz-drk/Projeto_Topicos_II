<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fermento extends Model
{
    use HasFactory;
    protected $table = "fermentos";
    protected $fillable = ['nome', 'marca', 'descricao'];
}

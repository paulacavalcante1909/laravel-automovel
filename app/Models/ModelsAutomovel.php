<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelsAutomovel extends Model
{
    use HasFactory;

    protected $fillable = [
        'veiculo',
        'marca',
        'ano',
        'descricao',
        'vendido',
    ];
}

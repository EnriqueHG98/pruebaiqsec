<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientebeneficios extends Model
{
    use HasFactory;

    protected $table = "clientebeneficio";

    protected $fillable = [
        "idCliente",
        "idBeneficio"
    ];
}

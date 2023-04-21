<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beneficios extends Model
{
    use HasFactory;

    protected $table = "beneficios";

    protected $casts = [
        "id" => "int"
    ];

    protected $fillable = [
        "id",
        "beneficio"
    ];
}

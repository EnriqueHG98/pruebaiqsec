<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class usuarios extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    //protected $table = "usuarios"; //crear tabla
    protected $casts = ["id" => "int"];
    protected $fillable = ["id", "correo", "nombre", "contraseña"]; //definimos campos de tabla usuarios
}

<?php

namespace SistAlmacen\models\Seguridad;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    protected $remember_token = false;
    protected $table = "usuario";
    protected $fillable = ['Email', 'clave',];
    protected $guarded = ['id'];
}

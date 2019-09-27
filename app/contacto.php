<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contacto extends Model
{
    protected $fillable = [
        'id_contacto','nombre','apellido','fecha_nac','direccion','telefono','email'
       ];
       protected $primaryKey = 'id_contacto';
}

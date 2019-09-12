<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ingreso extends Model
{
    protected $fillable = [
        'id_ingreso','nombre_ingreso','tipo_ingreso','total'
       ];
}

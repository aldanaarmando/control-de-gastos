<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gasto extends Model
{
    protected $fillable = [
        'id_gasto','nombre_gasto','tipo_gasto','precio_unitario','cantidad','total'
       ];
}

<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class usuario extends Model
{
    protected $fillable = [
        'id_usuario','nombre','apellido_pat','apellido_mat','fecha_nac','celular','genero'
       ];
       protected $primaryKey = 'id_usuario';
}

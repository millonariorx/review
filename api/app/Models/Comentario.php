<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $table = "comentarios";
    protected $fillable=["id_post","nombre","mensaje"];
}

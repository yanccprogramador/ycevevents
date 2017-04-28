<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    //
    protected $fillable = ['name', 'descricao', 'owner', 'data','horas', 'created_at', 'updated_at'];
}

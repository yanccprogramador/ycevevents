<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participantes extends Model
{
    //
    protected $fillable = ['nome', 'email', 'evento', 'created_at', 'updated_at'];
    public $nome;
    protected $email;
    protected $evento;
}

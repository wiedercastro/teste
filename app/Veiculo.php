<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Veiculo extends Model
{
    public $timestamps = false;
    protected $fillable = ['marca','modelo','versao','dica','tipo'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{
    protected $fillable = ['ciudad', 'codigo', 'temperatura', 'fecha'];
}

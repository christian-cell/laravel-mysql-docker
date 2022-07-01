<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $filable = ['nombre','primer_apellido','segundo_apellido','edad'];
    // public $timestamps = false;
}

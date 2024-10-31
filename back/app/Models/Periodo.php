<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Periodo extends Model{
    use SoftDeletes;
    protected $fillable = ['periodo','fecha_inicio','fecha_fin'];
    protected $hidden = ['created_at','updated_at','deleted_at'];
}

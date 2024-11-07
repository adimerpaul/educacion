<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Poa extends Model{
    use SoftDeletes;
    protected $fillable = ['area_id', 'periodo_id', 'user_id', 'fecha', 'estado'];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
    function area(){
        return $this->belongsTo(Area::class);
    }
    function periodo(){
        return $this->belongsTo(Periodo::class);
    }
    function user(){
        return $this->belongsTo(User::class);
    }
    function detalles(){
        return $this->hasMany(DetallePoa::class);
    }
}

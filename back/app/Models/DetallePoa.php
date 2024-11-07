<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetallePoa extends Model{
    use SoftDeletes;
    protected $fillable = ['poa_id', 'material_id', 'cantidad', 'precio_unitario', 'total', 'cantidad_entregada'];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
    public function poa(){
        return $this->belongsTo(Poa::class);
    }
    public function material(){
        return $this->belongsTo(Material::class);
    }
}

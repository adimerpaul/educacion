<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Periodo extends Model{
    use SoftDeletes;
    protected $fillable = ['periodo','fecha_inicio','fecha_fin'];
    protected $hidden = ['created_at','updated_at','deleted_at'];
    protected $appends = ['estado'];
    function getEstadoAttribute(){
        $hoy = date('Y-m-d');
        if($hoy >= $this->fecha_inicio && $hoy <= $this->fecha_fin){
            return 'Vigente';
        }else if($hoy < $this->fecha_inicio){
            return 'Próximo';
        }else{
            return 'Finalizado';
        }
    }
}

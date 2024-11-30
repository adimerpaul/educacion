<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Periodo extends Model{
    use SoftDeletes;
    protected $fillable = [
        'periodo',
        'fechaInicio',
        'fechaFin',
        'accionInstitucional',
        'accionCortoPlazo',
        'resultadoEsperado1',
        'resultadoEsperado2',
        'totalPresupuesto',
        'accionCortoPlazo1',
        'accionCortoPlazo2',
        'accionCortoPlazo3',
        'resultadoEsperadoGestion1',
        'resultadoEsperadoGestion2',
        'resultadoEsperadoGestion3',
        'resultadoEsperadoGestion4',
        'resultadoEsperadoGestion5',
        'fechaPrevistaInicio1',
        'fechaPrevistaInicio2',
        'fechaPrevistaInicio3',
        'fechaPrevistaFinalizacion1',
        'fechaPrevistaFinalizacion2',
        'fechaPrevistaFinalizacion3',
    ];
    protected $hidden = ['created_at','updated_at','deleted_at'];
    protected $appends = ['estado'];
    function getEstadoAttribute(){
        $hoy = date('Y-m-d');
        if($hoy >= $this->fechaInicio && $hoy <= $this->fechaFin){
            return 'Vigente';
        }else if($hoy < $this->fechaInicio){
            return 'Próximo';
        }else{
            return 'Finalizado';
        }
    }
}

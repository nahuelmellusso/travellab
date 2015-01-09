<?php

use Illuminate\Auth\UserTrait;

use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;



Class Package extends Eloquent {
 
    protected $table = 'Package';
    protected $perPage = 3;

    protected $fillable = array('id','validez','titulo','subtitulo','vigencia_comprar_desde','vigencia_comprar_hasta'
                            ,'vigencia_viajar_desde','vigencia_viajar_hasta','obsvig','dias','noches','translado'
                            ,'empresa','escalas','directo','primera','precio','pais','economica','obsaer','dni','visa','pasaporte'
                            ,'vacunas','obsdoc','desayuno','mediap','pencomp','allinclus','obsaloja','user','aventura'
                            ,'safari','playa','tropical','escapadas','cruceros','cultura','luna','anos','slider');
    
  

    
    // este metodo se debe implementar por la interfaz
    
    
    //este metodo se debe implementar por la interfaz
    // y sirve para obtener la clave al momento de validar el inicio de sesión 
    
    public function getRememberToken() {
    return 0;
    }

    public function setRememberToken($token) {
    return 0;
    }

    public function getRememberTokenName()
    {
    return 0;
    }
}
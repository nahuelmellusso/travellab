<?php

use Illuminate\Auth\UserTrait;

use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;



Class Mailing extends Eloquent {
 
    protected $table = 'mailing';

    protected $fillable = array('id','nombre','mail','agente','quiere');
    
    
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
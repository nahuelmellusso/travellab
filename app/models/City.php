<?php

use Illuminate\Auth\UserTrait;

use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;



Class City extends Eloquent {
 
    protected $table = 'City';

    protected $fillable = array('id','Country_id', 'City');
    
    
    // este metodo se debe implementar por la interfaz
    public function country()
        {
            return $this->hasOne('Country');
        }
    
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
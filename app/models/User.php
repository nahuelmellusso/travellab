<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;



Class User extends Eloquent implements UserInterface{
 
    protected $table = 'usuarios';
    protected $fillable = array('username','password');
 
    // este metodo se debe implementar por la interfaz
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }
    
    //este metodo se debe implementar por la interfaz
    // y sirve para obtener la clave al momento de validar el inicio de sesión 
    public function getAuthPassword()
    {
        return $this->password;
    }
    
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
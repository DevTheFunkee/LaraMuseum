<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Visitor extends Authenticatable
{
    


    protected $fillable = ['COGNOME', 'NOME','TELEFONO','LOGIN','email','password'];
    
    function tickets ()
    {
        return $this->hasMany ('App\Ticket');
    }


}

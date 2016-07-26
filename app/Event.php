<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
   
  

 
    
    public function avenue()
    {
        return $this->belongsTo('App\Avenue');
    }

    public function tickets()
    {
        return $this->hasMany('App\Ticket');
    }
    
}

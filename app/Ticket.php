<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{

    protected $fillable = ['visitor_id','FASCIA_ORARIA', 'DATA','TIPO_PAGAMENTO','QUANTITA','event_id'];
   
    public function visitor()
    {
        return $this->belongsTo('App\Visitor');
    }

    public function event()
    {
        return $this->belongsTo('App\Event');
    }

    public static $create_validation_rules = [
        'FASCIA_ORARIA'=>'required',
        'DATA'=>'required',
        'TIPO_PAGAMENTO'=>'required',
        'QUANTITA'=>'required',
    ];

}

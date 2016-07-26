<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avenue extends Model
{
  
   
  






    public function events()
    {

        return $this->hasMany('App\Event');
    }
}
//public function MAX_LIMIT_SIZE(Request $request){
//    $nome = $request->input('NOME');
//
//    $mLs = DB::table('avenue')
//        ->select(DB::raw('CAPIENZA'))
//        ->where('NOME', '=', $nome)
//        ->get();
//    return $mLs;
//}
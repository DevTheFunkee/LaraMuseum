<?php

namespace App\Http\Middleware;

use Closure;
use DB;
class TicketMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $id = $request->input('event_id');
        $idA = $request->input('avenue_id');

        $nFasciaOraria1 = DB::table('avenues')
            ->join('events', 'avenues.id', '=', 'events.avenue_id')
            ->join('tickets', 'events.id', '=', 'tickets.event_id')
            ->where('avenues.id', '=',$idA )
            ->where('events.id', '=',$id )
            ->where('FASCIA_ORARIA', 1)
            ->sum('QUANTITA');


        $nFasciaOraria2 = DB::table('avenues')
            ->join('events', 'avenues.id', '=', 'events.avenue_id')
            ->join('tickets', 'events.id', '=', 'tickets.event_id')
            ->where('avenues.id', '=',$idA )
            ->where('events.id', '=',$id )
            ->where('FASCIA_ORARIA', 2)
            ->sum('QUANTITA');

        $nFasciaOraria3 = DB::table('avenues')
            ->join('events', 'avenues.id', '=', 'events.avenue_id')
            ->join('tickets', 'events.id', '=', 'tickets.event_id')
            ->where('avenues.id', '=',$idA )
            ->where('events.id', '=',$id )
            ->where('FASCIA_ORARIA', 3)
            ->sum('QUANTITA');

        $nFasciaOraria4 = DB::table('avenues')
            ->join('events', 'avenues.id', '=', 'events.avenue_id')
            ->join('tickets', 'events.id', '=', 'tickets.event_id')
            ->where('avenues.id', '=',$idA )
            ->where('events.id', '=',$id )
            ->where('FASCIA_ORARIA', 4)
            ->sum('QUANTITA');

        $nFasciaOraria5 = DB::table('avenues')
            ->join('events', 'avenues.id', '=', 'events.avenue_id')
            ->join('tickets', 'events.id', '=', 'tickets.event_id')
            ->where('avenues.id', '=',$idA )
            ->where('events.id', '=',$id )
            ->where('FASCIA_ORARIA', 5)
            ->sum('QUANTITA');




        $capienza = DB::table('avenues')
            ->join('events', 'avenues.id', '=', 'events.avenue_id')
            ->join('tickets', 'events.id', '=', 'tickets.event_id')
            ->where('avenues.id', '=',$idA )
            ->where('events.id', '=',$id )
            ->select('CAPIENZA')
            ->get();

        if($nFasciaOraria1 > $capienza){
            return back()->withInput()->with('messages','capienza limite raggiunta');
        }else if($nFasciaOraria2 > $capienza){
            return back()->withInput()->with('messages','capienza limite raggiunta');
        }else if($nFasciaOraria3 > $capienza){
            return back()->withInput()->with('messages','capienza limite raggiunta');
        }else if($nFasciaOraria4 > $capienza){
            return back()->withInput()->with('messages','capienza limite raggiunta');
        }else if($nFasciaOraria5 > $capienza){
            return back()->withInput()->with('messages','capienza limite raggiunta');
        }



        return $next($request);
    }
}

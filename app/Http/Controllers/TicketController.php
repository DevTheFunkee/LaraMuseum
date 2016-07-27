<?php

namespace App\Http\Controllers;

use App\Event;
use App\Ticket;
use App\Visitor;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use Session;
class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()

    {
        $this->middleware('auth');


    }
    public function index()
    {

        $events = \App\Event::with('avenue')->where('DATA_INIZIO', '<=', Carbon::now() )->orderBy('DATA_INIZIO', 'DESC')->get();
        return view('Frontend.event', compact('events'));
    }

    /**store
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $idu = $request->input('event_id');
        $fasciaoraria = $request->input('FASCIA_ORARIA');

        $nxFasciaOraria = DB::table('avenues')
            ->join('events', 'avenues.id', '=', 'events.avenue_id')
            ->join('tickets', 'events.id', '=', 'tickets.event_id')
            ->where('events.id', '=',$idu )
            ->where('FASCIA_ORARIA', $fasciaoraria)
            ->sum('QUANTITA');

        $capienza = DB::table('avenues')
            ->join('events', 'avenues.id', '=', 'events.avenue_id')
            ->where('events.id', '=',$idu )
            ->get();


        $cap = $capienza[0]->CAPIENZA;


        $quantita   = $request->input('QUANTITA');



        if(($nxFasciaOraria + $quantita) > $cap){
            return back()->with('limit','capienza limite raggiunta per questa fascia oraria');
        }else{
            $this->validate($request, Ticket::$create_validation_rules);
            $data = $request->only('FASCIA_ORARIA','DATA','TIPO_PAGAMENTO','QUANTITA','event_id');
        Ticket::create([
            'visitor_id' => Auth::user()->id,
            'FASCIA_ORARIA' => $data['FASCIA_ORARIA'],
            'DATA' => $data['DATA'],
            'TIPO_PAGAMENTO' => $data['TIPO_PAGAMENTO'],
            'QUANTITA' => $data['QUANTITA'],
            'event_id'=>$data['event_id'],


        ]);

        return back()->withInput()->with('messages','ticket aggiunto correttamente');


    }}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $events = \App\Event::with('avenue')->where('id', '=', $id)->get();
        return view('Frontend.article.due', compact('events'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $ev= DB::table('tickets')
            ->select('event_id')
            ->where('tickets.id', '=',$id )
            ->get();
       $ide = $ev[0]->event_id;


        $bil= DB::table('avenues')
            ->join('events', 'avenues.id', '=', 'events.avenue_id')
            ->join('tickets', 'events.id', '=', 'tickets.event_id')
            ->select('TITOLO','NOME','INDIRIZZO','CITTA','FASCIA_ORARIA','DATA','QUANTITA')
            ->where('tickets.id', '=',$id )
            ->get();

        return view ('Frontend.editperspage', compact ('bil','id','ide'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $idu = $request->input('event_id');
        $fasciaoraria = $request->input('FASCIA_ORARIA');

        $nxFasciaOraria = DB::table('avenues')
            ->join('events', 'avenues.id', '=', 'events.avenue_id')
            ->join('tickets', 'events.id', '=', 'tickets.event_id')
            ->where('events.id', '=',$idu )
            ->where('FASCIA_ORARIA', $fasciaoraria)
            ->sum('QUANTITA');

        $capienza = DB::table('avenues')
            ->join('events', 'avenues.id', '=', 'events.avenue_id')
            ->where('events.id', '=',$idu )
            ->get();


        $cap = $capienza[0]->CAPIENZA;


        $quantita   = $request->input('QUANTITA');



if(($nxFasciaOraria + $quantita) > $cap){
    return back()->with('limit','capienza limite raggiunta per questa fascia oraria');
}else{
    $ticket = Ticket::findOrFail($id);
    $ticket->update($request->all());

    return redirect()->back()->with('message','succesfully update');

}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $ticket = \App\Ticket::findOrFail($id);
        $ticket->delete();

        Session::flash('flash_message', 'Ticket cancellato!');

        return redirect()->back();
    }
}

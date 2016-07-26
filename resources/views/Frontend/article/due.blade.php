@extends('Frontend.master.layout')



@section('sidebar')
    @parent


@endsection
@foreach($events as $event)
<div class="Dtitle">
    @section('title')
        {{ $event->TITOLO }}
    @endsection
</div>
@section('subheading')
    <div id="subh"> {{ $event->TITOLO }}</div>
@endsection
@section('content')


    @if(Session::has('messages'))
    <div class="alert alert-info">{{ Session::get('messages') }}</div>
    @endif

    @if(Session::has('limit'))
        <div class="alert alert-danger">{{ Session::get('limit') }}</div>
    @endif

    <script src="{{ url('js/jquery.js') }}"></script>
    <script src="{{ url('js/jquery-ui.js') }}"></script>


    <div class="container"><div calss="row">
    <div class="col-lg-5">   <h2>{{$event->TITOLO}}</h2>
    {{ Form::open(array('route'=>'ticket.store')) }}

    <h4>Data d'Inizio:</h4>
    <p>{{date('d/m/Y ', strtotime($event->DATA_INIZIO))}}</p>

    <h4>Data di fine spettacolo:</h4>
    <p>{{date('d/m/Y H:i', strtotime($event->DATA_FINE))}}</p>


    <h4>Prezzo:</h4>
    <p>{{$event->PREZZO}}</p>

    <h3>Sede:</h3>
    <p>{{$event->avenue->NOME}}</p>

    <h4>Indirizzo:</h4>

    <p>{{$event->avenue->INDIRIZZO}}</p>
    <p>{{$event->avenue->CITTA}}</p>

    <h4>Telefono:</h4>
    <p>{{$event->avenue->TELEFONO}}</p>

    <h4>Capienza</h4>

    <p>{{$event->avenue->CAPIENZA}}</p></div>
    <div class="col-sm-3">
    <div class="field-box">
    <label for="mostra_data">Seleziona il giorno:</label>
    <input type="text" name="DATA" id="DATA">
    </div>

    <div class="form-group ticket" >
    <label for='sel1'>Seleziona la fascia oraria:</label>
    <select class='form-control' id="hours" name='FASCIA_ORARIA' >

    </select>
    </div>

    <div class="form-group ticket">
    <label for='sel1'>Seleziona il metodo di pagamento:</label>
    <select class='form-control' id="money"  name='TIPO_PAGAMENTO' >
    </select>
    </div>


    <div class="form-group ticket">
    <label for="sel1">Seleziona la quantità:</label>
    <select class="form-control" id="qta" name="QUANTITA">
    </select>
    </div>

    <input type="hidden" class="form-control" value="" name="event_id" id="id_evento" >

    <script>

    document.getElementById("id_evento").value ="<?php echo $event->id?>";
    </script>

    <input type="hidden" class="form-control" value="" name="avenue_id" id="id_sede" >

    <script>

    document.getElementById("id_sede").value ="<?php echo $event->avenue->id?>";
    </script>



    </div></div></div>



    {{Form::submit(null,array('class'=>'btn btn-primary'))}}
    {{Form::token()}}
    {{Form::close()}}

    <?php  $meno =  strtotime($event->DATA_INIZIO); ?>
    <br>
    <?php  $sec =  time();     ?>
    <br>
    <?php  $difference =$sec - $meno  ?>

    <?php //Convert seconds into days.
    $inizio = floor($difference / (60*60*24) );?>

    <?php  $meno =  strtotime($event->DATA_FINE); ?>
    <br>
    <?php $sec =  time();    ?>
    <br>
    <?php  $differences = $meno - $sec  ?>

    <?php //Convert seconds into days.
    $fine = floor($differences / (60*60*24) );?>



    <script>


    $(function() {

    $( "#DATA" ).datepicker({
    dateFormat: "yy-mm-dd",
    changeYear: true,
    minDate: '-0D',
    maxDate: '+<?php echo $fine ?>D',
    });
    });
    </script>





    @endforeach
@endsection
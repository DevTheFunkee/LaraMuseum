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
    <div class="row">
        <div class="col-lg-6">
            <div id="infowind">
                <div class="container" >
                    <div class="row">
                        <div class="col-sm-6">

                            <h2>{{$event->TITOLO}}</h2>
                        </div></div><div class="row">
                        <div class="col-sm-2">
                            <h4>Data d'Inizio:</h4>
                            <p>{{date('d/m/Y ', strtotime($event->DATA_INIZIO))}}</p>
                        </div>  <div class="col-sm-2">
                            <h4>Fine spettacolo:</h4>
                            <p>{{date('d/m/Y ', strtotime($event->DATA_FINE))}}</p>
                        </div>  <div class="col-sm-1">
                            <h4>Prezzo:</h4>
                            <p>{{$event->PREZZO}}</p>

                        </div></div><div class="row">
                        <div class="col-sm-2">
                            <h4>Dove:</h4>
                            <p>{{$event->avenue->NOME}}</p>
                        </div>  <div class="col-sm-2">
                            <h4>Indirizzo:</h4>
                            <p>{{$event->avenue->CITTA}} . {{$event->avenue->INDIRIZZO}}</p>

                        </div>
                    </div><div class="row"> <div class="col-sm-2">

                            <h4>Telefono:</h4>
                            <p>{{$event->avenue->TELEFONO}}</p>
                        </div><div class="col-sm-1">
                            <h4>Capienza</h4>

                            <p>{{$event->avenue->CAPIENZA}}</p>
                        </div></div></div></div>

        </div><div class="col-lg-6">
            <div id="buytik">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-6">
                            {{ Form::open(array('route'=>'ticket.store')) }}
                            @if(Session::has('messages'))
                                <div class="alert alert-info">{{ Session::get('messages') }}</div>
                            @endif

                            @if(Session::has('limit'))
                                <div class="alert alert-danger">{{ Session::get('limit') }}</div>
                            @endif

                            <script src="{{ url('js/jquery-3.1.0.min.js') }}"></script>
                            <script src="{{ url('js/jquery-ui.js') }}"></script>

                        </div></div>

                    <div class="row">
                        <div class="col-lg-4 col-lg-2">


                            <div class="field-box">
                                <label for="mostra_data">Sel. il giorno:</label>
                                <input type="text" name="DATA" id="DATA">
                            </div>
                        </div><div class="col-lg-4 col-lg-2">
                            <div class="form-group ticket" >
                                <label for='sel1'>Sel. la fascia oraria:</label>
                                <select class='form-control' id="hours" name='FASCIA_ORARIA' >

                                </select>
                            </div>
                        </div></div>

                    <div class="row">
                        <div class="col-lg-4 col-lg-2">
                            <div class="form-group ticket">
                                <label for='sel1'>Metodo di pagamento:</label>
                                <select class='form-control' id="money"  name='TIPO_PAGAMENTO' >
                                </select>
                            </div>
                        </div><div class="col-lg-4 col-lg-2">

                            <div class="form-group ticket">
                                <label for="sel1">Sel. la quantità:</label>
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
                            </div></div><div class="row"><div class="col-sm-2">
                            {{Form::submit(null,array('class'=>'btn btn-primary'))}}
                            {{Form::token()}}
                            {{Form::close()}}

                        </div>
                    </div>
                </div>

            </div>

            </div>
    </div>















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
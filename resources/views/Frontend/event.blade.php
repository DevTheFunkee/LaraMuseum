
@extends('Frontend.master.layout')
<div class="Dtitle">
@section('title')
   Online Museum
@endsection
</div>
@section('subheading') You Museum Where U Want When U Whant.
@endsection

@section('sidebar')
@parent


@endsection

@section('content')
    <h1>Museum Online</h1>
    <hr class="small">
    <span class="subheading">@yield('subheading')</span>

    <hr>
    @foreach($events as $event)


        {{--{{$event}}--}}
{{ Form::open(array('')) }}
<div class="post-preview">
    <hr style="color: #000000!important;">



    <div id="infowind">
        <div class="container" >
            <div class="row">
                <div class="col-sm-6">

                    <a href="{{ url('ticket' .'/'. $event->id) }}">

                        <h2 class="post-title">   {{$event->TITOLO}} </h2>
                    </a>
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
<hr>







{{Form::close()}}


</div>

    @endforeach
@endsection

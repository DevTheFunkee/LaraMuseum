
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


<a href="{{ url('ticket' .'/'. $event->id) }}">

<h2 class="post-title">   {{$event->TITOLO}} </h2>
</a>
<h4>Data D'Inizio </h4>
<p> {{date('d/m/Y', strtotime($event->DATA_INIZIO)) }}</p>
<h4>Data Di Chiusura </h4>
<p> {{date('d/m/Y', strtotime($event->DATA_FINE))}}</p>


        <h4>Prezzo al biglietto</h4>
        <p>{{$event->PREZZO}}</p>



    <h2>Sede</h2>
    <p>{{$event->avenue->NOME}}</p>
    <h4>Capienza</h4>
    <p>{{$event->avenue->CAPIENZA}}</p>

    <h4>Indirizzo</h4>
    <p>{{$event->avenue->INDIRIZZO}}</p>
    <h4>telefono</h4>
    <p>{{$event->avenue->TELEFONO}}</p>
<hr>







{{Form::close()}}


</div>

    @endforeach
@endsection

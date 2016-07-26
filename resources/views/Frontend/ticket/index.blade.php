@extends('Frontend.master.layout')

@section('title', 'Ticket Store')
@include('Frontend.includes.carousel')
@section('sidebar')
    @parent


@endsection

@section('content')
    @if(Session::has('messages'))
        <div class="alert alert-info">{{ Session::get('messages') }}</div>
    @endif
<h2>Qui puoi acquistare il tuo biglietto</h2>

    <h3>scegli l'orario</h3>


@endsection
@extends('Frontend.master.layout')



@section('sidebar')
    @parent


@endsection
@foreach($bil as $bi)
    <div class="Dtitle">
        @section('title')
            {{ $bi->TITOLO }}
        @endsection
    </div>
@section('subheading')
    <div id="subh"> {{$bi->TITOLO }}</div>
@endsection
@section('content')

<div class="container">
    <div class="row">
        <div class = col-lg-6 col-lg-4>
            @if(Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif
                @if(Session::has('limit'))
                    <div class="alert alert-danger">{{ Session::get('limit') }}</div>
                @endif

            {{ Form::model($bil,['route'=>['ticket.update', $id], 'method' =>'patch']) }}
            <h1>{{$bi->TITOLO }}</h1>
            <h2>{{$bi->NOME }}</h2>
            <h2>{{$bi->CITTA }}</h2>
            <h2>{{$bi->INDIRIZZO }}</h2>
            <h2>{{$bi->DATA }}</h2>
                <h1>Quantita:</h1>
            <h2>{{$bi->QUANTITA }}</h2>

           <input type="hidden" class="form-control" value="" name="event_id" id="id_evento" >

                <script>

                    document.getElementById("id_evento").value ="<?php echo $ide?>";
                </script>
                <input type="hidden" class="form-control" value="" name="FASCIA_ORAIRA" id="FASCIA_ORARIA" >

                <script>

                    document.getElementById("FASCIA_ORARIA").value ="<?php echo $bi->FASCIA_ORARIA?>";
                </script>
            <div class="form-group">
                {{ Form::label('QUANTITA','Quantita') }}
                {{ Form::text('QUANTITA',null,['class' => 'form-control']) }}
            </div>

                {{ Form::submit('update user?', ['class' => 'btn btn-warning']) }}
            {{Form::token()}}
            {{Form::close()}}
        </div>
    </div>
</div>

    @endforeach
@endsection
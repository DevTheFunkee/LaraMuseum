@extends('Frontend.master.layout')



@section('sidebar')
    @parent


@endsection

    <div class="Dtitle">
        @section('title')

        @endsection
    </div>
@section('subheading')
    <div id="subh"> </div>
@endsection
@section('content')



<div class="row ">
    <div class="col-sm-10 col-sm-offset-1">
        <table class="table table-striped">
            <thead>
            <td><b>Titolo</b></td>
            <td><b>Fascia Oraria</b></td>
            <td><b>Data</b></td>
            <td><b>Quantita</b></td>
           </thead>
            @foreach($bil as $i => $bi)

                <tr>
                    <td>{{ $bi->event->TITOLO }}</td>
                    <td>{{ $bi->FASCIA_ORARIA }}</td>
                    <td>{{ date('d/m/Y', strtotime($bi->DATA)) }}</td>
                        <td>{{$bi->QUANTITA }}</td>

                    <td>  {!! Form::model($bi, ['route' => ['ticket.destroy', $bi->id], 'method' => 'delete', 'class' => 'form-inline'] ) !!}
                        <a href="{{ route('ticket.edit', $bi->id)}}">Edit</a> |
                        {!! Form::submit('delete', ['class'=>'btn btn-xs btn-danger js-submit-confirm']) !!}
                        {!! Form::close()!!}</td>

                </tr>
        @endforeach


        </table>

    </div>
</div>


@endsection
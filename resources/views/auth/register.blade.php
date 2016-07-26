@extends('Frontend.master.layout')

@section('title', 'Page Title')
@include('Frontend.includes.carousel')
@section('sidebar')
    @parent


@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <span class="glyphicon glyphicon-ok"></span>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li><em>{{ $error }}</em></li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {{ Form::open(array('route'=>'auth.register')) }}

                <!--form input First_name-->
                    <div class="form-group">
                        {{ Form::label('COGNOME','Cognome') }}
                        {{ Form::text('COGNOME',null,['class' => 'form-control']) }}
                    </div>

                    <!--form input Last_name-->
                    <div class="form-group">
                        {{ Form::label('NOME','Nome') }}
                        {{ Form::text('NOME',null,['class' => 'form-control']) }}
                    </div>
                    <!--form input First_name-->
                    <div class="form-group">
                        {{ Form::label('TELEFONO','Telefono') }}
                        {{ Form::text('TELEFONO',null,['class' => 'form-control']) }}
                    </div>

                    <!--form input Last_name-->
                    <div class="form-group">
                        {{ Form::label('LOGIN','Username') }}
                        {{ Form::text('LOGIN',null,['class' => 'form-control']) }}
                    </div>

                    <!--form input Email-->
                    <div class="form-group">
                        {{ Form::label('EMAIL','Email') }}
                        {{ Form::text('EMAIL',null,['class' => 'form-control']) }}
                    </div>

                    <!--form input Password-->
                    <div class="form-group">
                        {{ Form::label('password','Password') }}
                        {{ Form::password('password',['class' => 'form-control']) }}
                    </div>


                    {{Form::submit(null,array('class'=>'btn btn-primary'))}}
                    {{Form::token()}}
                    {{Form::close()}}

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

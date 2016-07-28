@extends('Frontend.master.layout')

@section('title', 'Page Title')

@section('sidebar')
    @parent


@endsection

@section('content')
    <div id="home">
        <img src="{{asset('img/POP.jpg')}}" class="img-responsive" alt="home">
    </div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
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
                    {{ Form::open(array('route'=>'auth.login')) }}


                <!--form input Email-->
                    <div class="form-group">
                        {{ Form::label('LOGIN','Username') }}
                        {{ Form::text('LOGIN',null,['class' => 'form-control']) }}
                    </div>

                    <!--form input Password -->
                    <div class="form-group">
                        {{ Form::label('password','Password') }}
                        {{ Form::password('password',['class' => 'form-control']) }}
                    </div>
                    {{Form::submit(null,array('class'=>'btn btn-primary'))}}
                    {{Form::token()}}
                    {{Form::close()}}
                                <a class="btn btn-link" href="{{ url('/password/reset') }}">hai dimenticato la password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

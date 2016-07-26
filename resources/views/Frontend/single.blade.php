{{ Form::open(array('route'=>'ticket.store')) }}
{{Form::submit(null,array('class'=>'btn btn-primary'))}}
{{Form::token()}}
{{Form::close()}}

<!--form input CAPIENZA-->
<!--form input -->
<div class="form-group">
    {{ Form::label('','') }}
    {{ Form::text('',null,['class' => 'form-control']) }}
</div>
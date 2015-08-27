@extends('app')

@section('content')

    <h1> Create User</h1>

    <hr/>

    {!! Form::open(['url' => 'users']) !!}

        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
    
        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Add User', ['class' => 'btn btn-primary form-control']) !!}
        </div>

    {!! Form::close() !!}

@stop
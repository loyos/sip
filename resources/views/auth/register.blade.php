@extends('app')

@section('content')
<div class = "container">
    {!! Form::open(['url' => 'auth/register', 'class' => 'form-signin']) !!}
        <h1>Register</h1>
        <hr>
        {!! csrf_field() !!}

        <div class="form-group">
            {!! Form::label('name', 'Nombre:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('password_confirmation', 'Password Confirmation:') !!}
            {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::submit('Register', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
</div>

    @stop

@include('errors.list')


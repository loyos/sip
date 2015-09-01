@extends('app')

@section('content')

    <h1> Create User</h1>

    <hr/>

    {!! Form::open(['url' => 'users']) !!}

       @include('users.form')

    {!! Form::close() !!}

    @include('errors.list')
@stop
@extends('app');

@section('content')
    <h1>Edit : {!! $user->name !!} </h1>

    {!! Form::model($user, ['method' => 'PATCH', 'action' =>['UsersController@update', $user->id]]) !!}

    @include('users.form')

    {!! Form::close() !!}

    @include('errors.list')

@stop
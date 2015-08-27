@extends('app')

@section('content')
    <h1> {{ $user->name }} </h1>

    <hr>

    <article>
        {{$user->email}}
    </article>


@stop
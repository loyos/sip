@extends('app')

@section('content')
    <h1> Users </h1>

    <?php if (Auth::check()) {
        echo 'el usuario esta logueado';
    }
    ?>
    <hr>

    @foreach($users as $user)
        <article>

            <h2>
                <a href="{{action('UsersController@show', [$user->id])}}">{{ $user->name }}</a>
            </h2>

            <div class = "body">
                {{$user->email}}
            </div>

        </article>

    @endforeach


@stop
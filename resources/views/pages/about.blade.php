@extends('app')

@section('content')

    <h1> About me: <?php echo $name; ?></h1>

    <ul>
        @foreach ($people as $person)
            <li>    {{ $person  }} </li>

        @endforeach
    </ul>
@stop

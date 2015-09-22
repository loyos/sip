<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>

    <div class = "container">
        <div class="header">
            @if (Auth::check())
                <div class="dropdown logout">
                    Hola {{Auth::user()->name}}
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">

                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="{{action('UsersController@edit', Auth::user()->id )}}">Edit info</a></li>
                        <li><a href="{{action('Auth\AuthController@getLogout')}}">Logout</a></li>
                    </ul>
                </div>
            @endif
        </div>

        @if(Session::has('flash_message'))

            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{ Session::get('flash_message') }}

            </div>

        @endif

        @yield('content')

    </div>

    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>
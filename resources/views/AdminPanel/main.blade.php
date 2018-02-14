<!DOCTYPE html>

<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Админ панель</title>
    {{--Google Fonts--}}
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Jura" rel="stylesheet">
    {{--Bootstrap--}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    {{--My css file--}}
    <link href="{{ asset('css/new.css') }}" rel="stylesheet" type="text/css">
    {{--navbar--}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top" role="navigation">
        <a href="#" class="navbar-brand">
            <img src="http://moziru.com/images/gothic-clipart-calligraphy-5.jpg"
                 width="35px" height="35px" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggle-icon"></span>>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('home') }}">Вернуться в блог</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('admin') }}">Админ панель</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('addPost') }}">Добавить пост</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/">Пользователи</a>
                <li>
                <li class="nav-item">
                    <a class="nav-link " href="/">Комментарии</a>
                </li>


            </ul>
        </div>

    </nav>

</head>


<body>
@if(count($errors) > 0)
    <ul>
        @foreach($errors->all() as $error )
            <li class="text-danger"> {{ $error }} </li>
        @endforeach
    </ul>
@endif

@yield('content')


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>
@extends('layouts.site')

@section('content')

    <div class="container">
        <div class="container-fluid">
            <div class="text-center">


                <h1 class="header-on-page">Список тегов</h1>
                <ul class="list-group">
                    @foreach($tags as $tag)
                        <li class="list-group-item"><a href="/posts/tag/{{$tag->id}}">{{$tag->name}}</a></li>
                    @endforeach

                </ul>
                <div class="container-fluid">
                    <a class="btn btn-primary btn-sm " role="button" href="/">Вернуться назад</a>
                </div>
            </div>
        </div>
    </div>

@endsection
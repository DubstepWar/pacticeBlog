@extends('layouts.site')
@section('content')

    <div class="container-fluid">
        <div class="container">
            <h1 class="header-home-page">Статьи тега "{{$tag->name}}"</h1>
            @foreach($posts as $post)
                <div>
                    <h1 class="header-home-page"><p>{{ $post->name }}</p></h1>
                    <p class="date-on-page">Дата публикации: <span>{{$post->created_at}}</span></p>
                    <div class="text-center">
                    <img class="w-75" src="{{$post->img}}">
                    </div>
                    <p class="text-justify">{{$post->description}}</p>
                    <a class="btn btn-info btn-sm" role="button" href="/post/{{$post->alias}}">Узнать больше...</a>
                </div>

            @endforeach
        </div>
    </div>
@endsection
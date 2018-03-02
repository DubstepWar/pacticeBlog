@extends('layouts.site')
@section('content')

    <div class="container-fluid">
        <div class="container">
            <h1 class="header-home-page">Статьи категории "{{$category->name}}"</h1>
                @foreach($catArticles as $catArticle)
                    <div class="header-home-page">{{$catArticle->name}}</div>
                    <p class="date-on-page">Дата публикации: <span>{{$catArticle->created_at}}</span></p>
                    <div class="text-center">
                    <img class="w-75" src="/public/images/{{$catArticle->img}}">
                    </div>
                    <p class="text-justify">{{$catArticle->description}}</p>
                    <a class="btn btn-info btn-sm" role="button" href="/post/{{$catArticle->alias}}">Узнать больше...</a>
                @endforeach

        </div>
    </div>
@endsection
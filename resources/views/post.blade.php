@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="container-fluid">
            <p class="header-on-page">{{ $article->name }}</p>
            <p class="date-on-page">{{ $article->created_at }}</p>
            <div class="text-center">
                <img class="w-75" src="/public/images/{{ $article->img }}" alt="">
            </div>
            <p class="text-justify">{!! $article->body !!} </p>
            <a class="btn btn-primary btn-sm" role="button" href="/">Вернуться</a>

            <p class="lead text-danger">ТЕГИ:</p>
            @foreach($tags as $tag)
                <a class="btn btn-warning btn-sm" href="{{ route('tag', ['id' => $tag->id]) }}">{{$tag->name}}</a>
            @endforeach

            @foreach($comments as $comment)
                <p>Пользователь: <span class="text-primary">{{ $comment->user->name }}</span> в
                    <span>{{$comment->created_at}}</span> добавил комментарий:</p>
                <p>{{$comment->comment}}</p>
            @endforeach
            @if (Auth::guest())
                <p class="text-danger">Авторизируйтесь для коментариев</p>
            @else
                <p>Ваш комментарий:</p>
                <form action="{{route('comment_post')}}" method="POST">
                {!! csrf_field() !!}
                <input type="hidden" value="{{$article->id}}" name="article_id">
                <textarea name="comment" rows="5" cols="100">{{ old('comment') }}</textarea><br>
                <button type="submit" class="btn btn-success">Отправить</button>
                </form>
            @endif
        </div>
    </div>
@endsection


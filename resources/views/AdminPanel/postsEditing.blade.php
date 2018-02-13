@extends('AdminPanel.main')

@section('content')

    <div class="container-fluid">
        <div class="container">
            <div class="text-center justify-content-center">
                @if (Session::has('message'))
                    <div class="alert alert-success">
                        <ul>
                            <li>{!! Session::get('message') !!}</li>
                        </ul>
                    </div>
                @endif
                @foreach($articles as $article)
                    <h1 class="header-home-page"><p>{{ $article->name }}</p></h1>
                    <img class=" mw-100" src="{{ $article->img }}" alt="">
                    <p class="text-center">{{ $article->description }}</p>
                    <p class="text-center">{{ $article->body }}</p>

                    <form action="{{ route('deletePost',['$article' => $article->id]) }}" method="post">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm">Удалить пост</button>
                    </form>
                @endforeach
            </div>
        </div>
    </div>


@endsection
@extends('AdminPanel.main')

@section('content')

    <div class="container-fluid">
        <div class="container">
            <div class="row text-center justify-content-center">
                @foreach($articles as $article)
                    <div class="col-md-12">
                        <div>
                            <h1 class="header-home-page"><p>{{ $article->name }}</p></h1>
                            <img class=" mw-100" src="{{ $article->img }}" alt=""  >
                            <p class="text-justify">{{ $article->description }}</p>
                            <a class="btn btn-info btn-sm" role="button" href="post/{{$article->alias}}">Смотреть больше</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection
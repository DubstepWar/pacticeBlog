@extends('AdminPanel.main')

@section('content')

    <div class="container-fluid">
        <div class="container">
            <div class="row text-center justify-content-center">
                @foreach($articles as $article)
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="news-item">
                            <h1 class="header-home-page"><p>{{ $article->name }}</p></h1>
                            <img class=" mw-100" src="/public/images/{{ $article->img }}" alt="">
                            <p class="text-center">{{ $article->description }}</p>
                            <a class="btn btn-info btn-sm" role="button" href="{{ route('editPost',['id' => $article->id]) }}">Редактировать пост</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
{{$pagination}}
@endsection
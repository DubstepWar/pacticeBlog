@extends('AdminPanel.main')

@section('content')
    <h1 class="header-on-page">Редактирование постов</h1>

    <div class="container">
        <div class="container-fluid">

            @if (Session::has('message'))
                <div class=" text-center text-success">
                    <ul>
                        <li>{{ Session::get('message') }}</li>
                    </ul>
                </div>
            @endif

            @foreach($articles as $article)

                <form action="{{ route('updatePost',['$article' => $article->id]) }}" method="post">
                    <div class="form-group">
                        <label for="name">Название поста</label>
                        <input class="form-control" type="text" name="name" value="{{ $article->name }}">
                    </div>
                    <div class="form-group">
                        <label for="alias">Псевдоним</label>
                        <input class="form-control" type="text" name="alias" value="{{ $article->alias }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Краткое описание поста</label>
                        <input class="form-control" type="text" name="description" value="{{ $article->description }}">
                    </div>
                    <div class="form-group">
                        <label for="body">Полный текст поста</label>
                        <textarea class="form-control" name="body">{{ $article->body }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="img">URL картинки</label>
                        <input class="form-control" type="text" name="img" value="{{ $article->img }}">
                    </div>
                    <div class="form-group">
                        <label for="category_id">ID категории</label>
                        <input class="form-control" type="number" name="category_id"
                               value="{{ $article->category_id }}">
                    </div>

                    <button class="btn btn-success" type="submit" name="doneUpdate">Обновить пост</button>


                    {{ csrf_field() }}
                    {{ method_field('put') }}

                </form>
                <form action="{{ route('deletePost',['id' => $article->id]) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button class="btn btn-danger" type="submit" name="doneDelete">Удалить пост</button>
                </form>
            @endforeach
        </div>
    </div>


@endsection
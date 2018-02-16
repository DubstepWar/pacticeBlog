@extends('AdminPanel.main')

@section('content')
    <h1 class="header-on-page">Редактирование поста</h1>

    <div class="container">
        <div class="container-fluid">

            @if (Session::has('message'))
                <div class=" text-center text-success">
                    <ul>
                        <li>{{ Session::get('message') }}</li>
                    </ul>
                </div>
            @endif

                <form action="{{ route('updatePost',['id' => $articles->id]) }}" method="post">
                    <div class="form-group">
                        <label for="name">Название поста</label>
                        <input class="form-control" type="text" name="name" value="{{ $articles->name }}">
                    </div>
                    <div class="form-group">
                        <label for="alias">Псевдоним</label>
                        <input class="form-control" type="text" name="alias" value="{{ $articles->alias }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Краткое описание поста</label>
                        <input class="form-control" type="text" name="description" value="{{ $articles->description }}">
                    </div>
                    <div class="form-group">
                        <label for="body">Полный текст поста</label>
                        <textarea class="form-control" name="body">{{ $articles->body }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="img">URL картинки</label>
                        <input class="form-control" type="text" name="img" value="{{ $articles->img }}">
                    </div>
                    <div class="form-group">
                        <label for="category_id">ID категории</label>
                        <input class="form-control" type="number" name="category_id"
                               value="{{ $articles->category_id }}">
                    </div>

                    <button class="btn btn-success" type="submit" name="doneUpdate">Обновить пост</button>


                    {{ csrf_field() }}
                    {{ method_field('put') }}

                </form>
                <form action="{{ route('deletePost',['article' => $articles->id]) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button class="btn btn-danger" type="submit" name="doneDelete">Удалить пост</button>
                </form>
        </div>
    </div>


@endsection
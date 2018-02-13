@extends('AdminPanel.main')

@section('content')

    <div class="container">
        <div class="conteiner-fluid">
            <form action="{{ route('storePost') }}" method="post">
                <div class="form-group">
                    <label for="name">Название поста</label>
                    <input class="form-control" type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="alias">Псевдоним</label>
                    <input class="form-control" type="text" name="alias">
                </div>
                <div class="form-group">
                    <label for="description">Краткое описание поста</label>
                    <input class="form-control" type="text" name="description">
                </div>
                <div class="form-group">
                    <label for="body">Полный текст поста</label>
                    <textarea class="form-control" name="body"></textarea>
                </div>
                <div class="form-group">
                    <label for="img">URL картинки</label>
                    <input class="form-control" type="text" name="img">
                </div>
                <div class="form-group">
                    <label for="category_id">ID категории</label>
                    <input class="form-control" type="number" name="category_id">
                </div>

                <button class="btn btn-primary" type="submit" name="done">Создать пост</button>

                {{ csrf_field() }}

            </form>
        </div>
    </div>

@endsection
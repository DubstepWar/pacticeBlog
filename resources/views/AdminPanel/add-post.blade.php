@extends('AdminPanel.main')

@section('content')

    <div class="container">
        <div class="container-fluid">
            <h3 class="header-on-page">Создать пост</h3>
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
                    <label for="category">Выберите категорию</label>
                    <select name="category" class="form-control">
                        @foreach($categories as $key => $category)
                            <option><span>{{$key}}) </span>{{$category}}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-success" type="submit" name="done">Создать пост</button>
                <a class="btn btn-info" href="{{ route('admin') }}" role="button">Вернуться к редактированию</a>

                {{ csrf_field() }}

            </form>

        <div>

        </div>
        <div>
            <h3 class="header-on-page">Создать категорию</h3>
            <form action="{{ route('add_category') }}" method="POST">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label>Название категории</label>
                    <input class="form-control" type="text" name="category" value="{{ old('category') }}"
                           placeholder="Категория">
                </div>
                <button class="btn btn-success" type="submit" name="done">Создать</button>
            </form>
            <h3 class="header-on-page">Создать тег</h3>
            <form action="{{ route('add_tag') }}" method="POST">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label>Название тега</label>
                    <input class="form-control" type="text" name="tag" value="{{ old('tag') }}" placeholder="Тег">
                </div>
                <button class="btn btn-success" type="submit" name="done">Создать</button>
            </form>
        </div>
        </div>
    </div>


@endsection
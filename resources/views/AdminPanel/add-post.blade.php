@extends('AdminPanel.main')

@section('content')

    <div class="container">
        <div class="container-fluid">
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
                    <label >Выберите категорию</label>
                    <select name="category">
                        @foreach($categories as $category => $key)
                            <option><span>{{$category}}. </span>{{$key}}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-success" type="submit" name="done">Создать пост</button>
                <a class="btn btn-info" href="{{ route('admin') }}" role="button">Вернуться к редактированию</a>

                {{ csrf_field() }}

            </form>
        </div>
        <div >

    </div>
        <div >
            <h3>Создать категорию</h3>
            <form action="{{ route('add_cat') }}" method="POST">
                {!! csrf_field() !!}
                <label>Название категории</label>
                <input type="text" name="cat" value="{{ old('cat') }}" placeholder="Категория">
                <button class="btn btn-success" type="submit" name="done">Создать</button>
            </form>
            <h3>Создать новый тег</h3>
            <form action="{{ route('add_tag') }}" method="POST">
                {!! csrf_field() !!}
                <label>Название тега</label>
                <input type="text" name="tag" value="{{ old('tag') }}" placeholder="Тег">
                <button class="btn btn-success" type="submit" name="done">Создать</button>
            </form>
        </div>

@endsection
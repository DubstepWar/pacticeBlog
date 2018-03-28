@extends('AdminPanel.main')

@section('content')

    <div class="container">
        <div class="container-fluid">
            <h3 class="header-on-page">Создать пост</h3>
            <form action="{{ route('storePost') }}" method="post" enctype="multipart/form-data">
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
                    <textarea class="form-control my-editor" name="body"></textarea>
                </div>
                <div class="form-group">
                    <label for="img">Картинка</label>
                    <input class="form-control img-choose" type="file" name="img">
                </div>
                <div class="form-group">
                    <label for="category_id">Выберите категорию</label>
                    <select class="form-control" name="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Выберите тег/теги</label>
                    <select class="form-control" multiple size="5" name="tags[]">
                        @foreach($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-success" type="submit" name="done">Создать пост</button>
                <a class="btn btn-info" href="{{ route('admin') }}" role="button">Вернуться к редактированию</a>

                {{ csrf_field() }}

            </form>
        </div>
    </div>
    {{-- ************ --}}
    <div class="container">
        <div class="row container-fluid">
            <div class="col-md-6">
                <h3 class="header-on-page">Создать категорию</h3>
                <form action="{{ route('add_category') }}" method="POST">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label>Название категории</label>
                        <input class="form-control" type="text" name="category" value="{{ old('category') }}"
                               placeholder="Категория">
                        <label>Псевдоним категории</label>
                        <input class="form-control" type="text" name="alias" value="{{ old('alias') }}"
                               placeholder="Псевдоним">
                    </div>
                    <button class="btn btn-success" type="submit" name="done">Создать</button>
                </form>

                <h3 class="header-on-page">Удалить категорию</h3>
                <form action="{{ route('deleteCategory') }}" method="POST">
                    {!! csrf_field() !!}
                    {{ method_field('delete') }}
                    <div class="form-group">
                        <label>Выберите категорию для удаления</label>
                        <select class="form-control" name="categoryDelete">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-danger" type="submit" name="done">Удалить</button>
                </form>
            </div>
            <div class="col-md-6">
                <h3 class="header-on-page">Создать тег</h3>
                <form action="{{ route('add_tag') }}" method="POST">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label>Название тега</label>
                        <input class="form-control" type="text" name="tag" value="{{ old('tag') }}"
                               placeholder="Тег">
                        <label>Псевдоним тега</label>
                        <input class="form-control" type="text" name="alias" value="{{ old('alias') }}"
                               placeholder="Псевдоним">
                    </div>
                    <button class="btn btn-success" type="submit" name="done">Создать</button>
                </form>

                <h3 class="header-on-page">Удалить тег</h3>
                <form action="{{ route('deleteTag') }}" method="POST">
                    {!! csrf_field() !!}
                    {{ method_field('delete') }}
                    <div class="form-group">
                        <label>Выберите категорию для удаления</label>
                        <select class="form-control" name="tagDelete">
                            @foreach($tags as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-danger" type="submit" name="done">Удалить</button>
                </form>

            </div>
        </div>
    </div>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>
        var editor_config = {
            path_absolute: "/",
            selector: "textarea.my-editor",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
            file_browser_callback: function (field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file: cmsURL,
                    title: 'Filemanager',
                    width: x * 0.8,
                    height: y * 0.8,
                    resizable: "yes",
                    close_previous: "no"
                });
            }
        };

        tinymce.init(editor_config);
    </script>

@endsection
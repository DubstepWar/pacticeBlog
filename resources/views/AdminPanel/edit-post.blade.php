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

            <form action="{{ route('updatePost',['id' => $articles->id]) }}" method="post" enctype="multipart/form-data">
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
                    <textarea class="form-control my-editor" name="body">{{ $articles->body }}</textarea>
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
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>
        var editor_config = {
            path_absolute : "/",
            selector: "textarea.my-editor",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
            file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                });
            }
        };

        tinymce.init(editor_config);
    </script>

@endsection
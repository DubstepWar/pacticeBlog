@extends('AdminPanel.main')

@section('content')
    <h1 class="header-on-page">Редактировать коментарий</h1>

    <div class="container">
        <div class="container-fluid">

            @if (Session::has('message'))
                <div class=" text-center text-success">
                    <ul>
                        <li>{{ Session::get('message') }}</li>
                    </ul>
                </div>
            @endif

                <form action="{{ route('updateComment',['id' => $comment->id]) }}" method="post">
                    <div class="form-group">

                        <input class="form-control" type="text" name="comment" value="{{ $comment->comment }}">
                    </div>

                    <button class="btn btn-success" type="submit" name="doneUpdate">Обновить коментарий</button>


                    {{ csrf_field() }}
                    {{ method_field('put') }}

                </form>
                <form action="{{ route('deleteComment',['comment' => $comment->id]) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button class="btn btn-danger" type="submit" name="doneDelete">Удалить коментарий</button>
                </form>
        </div>
    </div>


@endsection
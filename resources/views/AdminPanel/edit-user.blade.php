@extends('AdminPanel.main')

@section('content')
    <h1 class="header-on-page">Редактировать данные пользователя</h1>

    <div class="container">
        <div class="container-fluid">

            @if (Session::has('message'))
                <div class=" text-center text-success">
                    <ul>
                        <li>{{ Session::get('message') }}</li>
                    </ul>
                </div>
            @endif

            <form action="{{ route('updateUser',['id' => $user->id]) }}" method="post">
                <div class="form-group">

                    <input class="form-control" type="text" name="name" value="{{ $user->name }}">
                </div>
                <div class="form-group">

                    <input class="form-control" type="text" name="email" value="{{ $user->email }}">
                </div>

                <button class="btn btn-success" type="submit" name="doneUpdate">Обновить пользователя</button>


                {{ csrf_field() }}
                {{ method_field('put') }}

            </form>
            <form action="{{ route('deleteUser',['user' => $user->id]) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('delete') }}
                <button class="btn btn-danger" type="submit" name="doneDelete">Удалить пользователя</button>
            </form>
        </div>
    </div>


@endsection
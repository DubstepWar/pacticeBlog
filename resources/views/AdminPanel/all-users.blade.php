@extends('AdminPanel.main')

@section('content')

    <div class="container-fluid">
        <div class="container">
            <div class="row text-center justify-content-center">
                @foreach($users as $user)
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="news-item">
                            <h1 class="header-home-page"><p>{{ $user->name }}</p></h1>
                            <p class="text-justify">{{ $user->email }}</p>
                            <a class="btn btn-info btn-sm" role="button"
                               href="{{ route('editUser',['id' => $user->id]) }}">Редактировать пользователя</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
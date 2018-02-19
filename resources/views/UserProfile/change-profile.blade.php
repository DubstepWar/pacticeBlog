@extends('layouts.site')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="header-on-page text-left">Редактирование личных данных</div>

                        @if (Session::has('message'))
                            <div class=" text-center text-success">
                                <ul>
                                    <li>{{ Session::get('message') }}</li>
                                </ul>
                            </div>
                        @endif

                        <form class="form-horizontal" action="{{ route('updateUserInfo',['id' => $user->id]) }}"
                              method="post">
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="name">Имя</label>
                                <div class="col-md-6">
                                    <input class="form-control" type="text" name="name" value="{{ $user->name }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="email">Имэйл</label>
                                <div class="col-md-6">
                                    <input class="form-control" type="text" name="email" value="{{ $user->email }}">
                                </div>
                            </div>

                            <button class="btn btn-success" type="submit" name="doneUpdate">Обновить информацию</button>

                            {{ csrf_field() }}
                            {{ method_field('put') }}

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="header-on-page text-left">Изменение пароля</div>

                    <div class="panel-body">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form class="form-horizontal" method="POST" action="{{ route('changePassword') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                                <label for="new-password" class="col-md-4 control-label">Текущий
                                    пароль</label>

                                <div class="col-md-6">
                                    <input id="current-password" type="password" class="form-control"
                                           name="current-password" required>

                                    @if ($errors->has('current-password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                                <label for="new-password" class="col-md-4 control-label">Новый
                                    пароль</label>

                                <div class="col-md-6">
                                    <input id="new-password" type="password" class="form-control"
                                           name="new-password" required>

                                    @if ($errors->has('new-password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="new-password-confirm" class="col-md-4 control-label">Подтвердите
                                    пароль</label>

                                <div class="col-md-6">
                                    <input id="new-password-confirm" type="password" class="form-control"
                                           name="new-password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-success">
                                        Изменить пароль
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
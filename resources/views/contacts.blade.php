@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="container-fluid">

            <h1 class="text-center">Обратная связь</h1>
            <div class="mx-auto w-25">
                <p class="text-center">ФИО: <mark>Рыбась Денис</mark></p>
                <p class="text-center">Контактный телефон:</p>
                <p class="text-center">
                    +(380)664199249
                </p>
                <p class="text-center">Имэйл:</p>
                <p class="text-center">android6636@gmail.com</p>
            </div>

            <p class="header-on-page">Отправить письмо</p>
            <form action="{{ route('sendForm') }}" method="post">
                <div class="form-group">
                    <label for="name">Имя</label>
                    <input class="form-control" type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="text" name="email">
                </div>
                <div class="form-group">
                    <label for="message">Ваше сообщение</label>
                    <textarea class="form-control" name="message"></textarea>
                </div>
                <button class="btn btn-success" type="submit" name="send">Отправить</button>
            </form>
        </div>
    </div>
@endsection
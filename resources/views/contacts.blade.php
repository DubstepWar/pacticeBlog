@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="container-fluid">

            <h1 class="text-center">Свяжитесь с нами</h1>
            <div class="mx-auto w-25">
                <p class="text-center">Контактные телефоны:</p>
                <p class="text-center">
                    <mark>Генс Алексей</mark>
                    +(380)965382005
                </p>
                <p class="text-center">
                    <mark>Рыбась Денис</mark>
                    +(380)664199249
                </p>
                <p class="text-center">Наши профили в <span class="text-info">Instagram:</span></p>
                <p class="text-center"><a href="https://www.instagram.com/alekseyhens/?hl=ru">Генс Алексей</a></p>
                <p class="text-center"><a href="https://www.instagram.com/den4jke/?hl=ru">Рыбась Денис</a></p>
            </div>

            <p class="header-on-page">Отправить письмо нам на почту</p>
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
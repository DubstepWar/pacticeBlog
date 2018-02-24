<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="container-fluid">
        <p>Имя: {{ $name }}</p>
        <p>Email: {{ $email }}</p>
        <p>Сообщение: {{ $message }}</p>
        </div>
    </div>
</body>
</html>
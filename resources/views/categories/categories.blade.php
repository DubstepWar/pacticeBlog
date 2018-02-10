@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="container-fluid">
            <div class="text-center">


                <h1 class="header-on-page">Список категорий</h1>

                <ul class="list-group">
                    @foreach($categories as $category)
                        <li class="list-group-item"><a href="/category/{{$category->alias}}">{{$category->name}}</a>
                        </li>
                    @endforeach
                </ul>
                <div class="container-fluid">
                    <a class="btn btn-primary btn-sm " role="button" href="{{route('home')}}">Вернуться назад</a>
                </div>
            </div>
        </div>
    </div>
@endsection
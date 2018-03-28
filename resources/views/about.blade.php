@extends('layouts.site')

@section('content')
    <div class="container">

        <h1 class="text-center">О Проекте</h1>
            @foreach($abouts as $about)
                <p>{!! $about->text !!}</p>
                <p class="text-center">
                </p>
            @endforeach
    </div>
@endsection
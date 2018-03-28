@extends('AdminPanel.main')

@section('content')

    <div class="container-fluid">
        <div class="container">
            <div class="row text-center justify-content-center">
                @foreach($abouts as $about)
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <div class="news-item">
                            <p class="text-justify">{{ $about->text }}</p>
                            <a class="btn btn-info btn-sm" role="button"
                               href="{{ route('editAbout',['id' => $about->id]) }}">Редактировать информацию</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
@extends('layouts.dcShow')

@section('main')
    <div class="container text-center">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-2">
                <div class="thumb-container p-2">
                    <img class="thumb-img" src="{{$comic['thumb']}}" alt="key">
                </div>
                <div class="mb-5">
                    <p class="font-s text-light text-start ms-2 text-uppercase fw-normal">{{$comic['series']}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
@extends('layouts.dcShow')

@section('main')
    <div class="position-relative grid-dc pt-5">
        <div class="position-but">
            <button type="button" class="text-light button-col border border-0 btn-primary">CURRENT SERIES</button>
        </div>
        <div class="container text-center">
            <div class="row">
                @foreach ($comics as $key => $comic)
                <div class="col-2">
                    <div class="thumb-container p-2">
                        <a href="info/{{$key}}"><img class="thumb-img" src="{{$comic['thumb']}}" alt="img{{$key}}"></a>
                    </div>
                    <div class="mb-5">
                        <p class="font-s text-light text-start ms-2 text-uppercase fw-normal">{{$comic['series']}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <button type="button" class="text-light button-col border border-0 btn-primary but-padd">LOAD MORE</button>
        </div>
    </div>

     <!-- menu -->
     <div class="menu-container d-flex justify-content-center position-relative">
        <ul class="d-flex">
            <li class="list-menu text-uppercase d-flex align-items-center">
                <div class="img-container padd-img">
                  <a href="#">  <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="dc.img"></a>
                </div>
            <p> digital comics</p>
            </li>
            <li class="list-menu text-uppercase d-flex align-items-center">
                <div class="img-container"> 
                    <a href="#"><img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="merchandise.img"></a>
                </div>
            <p> dc merchandise</p>
            </li>
            <li class="list-menu text-uppercase d-flex align-items-center">
                <div class="img-container">   
                    <a href="#"><img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="subscription.img"></a>
                </div>
            <p> subscription</p>
            </li>
            <li class="list-menu text-uppercase d-flex align-items-center">
            <div class="img-container padd-img"> 
                    <a href="#"><img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="comic.img"></a>
                </div>
                <p>comic shop locator</p>
            </li>
            <li class="list-menu text-uppercase d-flex align-items-center">
            <div class="img-container">  
                <a href="#"><img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="power.img"></a>
            </div>
            <p> dc power visa</p>
            </li>
        </ul>
    </div>
    <!-- menu -->
@endsection
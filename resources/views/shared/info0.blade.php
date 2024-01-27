@extends('layouts.dcShow')
 
@section('main')
    <div class="blu-row position-relative">
        @foreach ($comics as $key => $comic)
            @if ($key === 0)
                <div class="thumb-container p-2 position-absolute top-left">
                    <a href="info{{$key}}"><img class="thumb-img" class="img-width" src="{{$comic['thumb']}}" alt="img{{$key}}"></a>
                </div>
            @endif
        @endforeach
    </div>
    {{-- <div class="position-but">
        <img class="img-width" src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="merchandise.img">
    </div> --}}
    <div class="text-center click-img back-col-white">
        <div class="ms-5">
            @foreach ($comics as $key => $comic)
                @if ($key === 0)
                    <div class="img-container-info">
    
                        <div class="info-container d-flex">
                            {{-- contitore img e barr verde --}}
                           <div class="width-description">
                                <div class="title-container text-start pt-5 pb-3">
                                    <p class="title fs-4 text text-uppercase fw-medium">{{$comic['title']}}</p>
                                </div>
                                    {{-- barra verde prezzo --}}
                                <div class="green-row d-flex align-items-center mb-3">
                                    <div class="d-flex width-4 justify-content-between">
                                        <p class="ps-4 col-green-100">U.S Price <span class="text-light">{{$comic['price']}}</span></p>
                                        <p class="pe-4 col-green-100 text-uppercase">available</p>
                                    </div>
                                    {{-- lista --}}
                                    <div class="dropdown drop-list">
                                        <button class="text-light border-0 btn-secondary dropdown-toggle green-500" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Check Availability
                                        </button>
                                        <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                                {{-- descrizione --}}
                                <div class="description-container text-start ">
                                    <p class="description font-s-12">{{$comic['description']}}</p>
                                </div>
                            </div>
                             {{-- immagine --}}
                            <div class="mt-5 ms-4">
                                <p class="text-end text-uppercase fw-medium">advertisement</p>
                                <img class="img-width" src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="merchandise.img">
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
        {{-- descrizione tabellare --}}
        <div class="container-info-card">
            {{-- talent spaecs --}}
            <div class="d-flex justify-content-center mb-5">
                {{-- talent --}}
               <div class="talent-container p-2">
                    <div class="border-bottom text-start pb-4">
                        <p class=" fw-medium">talent</p>
                    </div>
                    <div class="d-flex border-bottom p-2">
                        <p class="f-12 col-b-800 margin-l-80">Art by:</p>
                        <p class="f-12 col-b-200">artisti</p>
                    </div>
                    <div class="d-flex border-bottom p-2">
                        <p class="col-b-800 f-12 margin-l-80">Written by:</p>
                        <p class="f-12 col-b-200">writers</p>
                    </div>
               </div>
                {{-- specs --}}
                <div class="specs-container">
                    <div class="border-bottom text-start pb-4">
                        <p class="fw-medium">Specs</p>
                    </div>
                    <div class="d-flex  border-bottom p-2">
                        <p class="col-b-800 f-12 margin-l-80">Series:</p>
                        @foreach ($comics as $key => $comic)
                            @if ($key === 0)
                                <p class="text-uppercase col-b-200">{{$comic['series']}}</p>
                            @endif
                        @endforeach
                    </div>
                    <div class=" d-flex border-bottom p-2">
                        <p class="col-b-800 f-12 margin-l-80">U.S Price:</p>
                        @foreach ($comics as $key => $comic)
                        @if ($key === 0)
                            <p class="f-12">{{$comic['price']}}</p>
                        @endif
                    @endforeach
                    </div>
                    <div class="d-flex border-bottom p-2">
                        <p class="col-b-800 f-12 margin-l-80">On Sale Date:</p>
                        @foreach ($comics as $key => $comic)
                        @if ($key === 0)
                            <p class="f-12">{{$comic['sale_date']}}</p>
                        @endif
                    @endforeach
                    </div>
                </div>
            </div>
            {{-- icons --}}
            <div>
                <div class="menu-container d-flex justify-content-center position-relative">
                    <ul class="d-flex">
                        <li class="list-menu text-uppercase d-flex align-items-center">
                            <p class="text-uppercase"> digital comics</p>
                            <div class="img-container-info padd-img">
                              <a href="#">  <img class="img-width" src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="dc.img"></a>
                            </div>
                        </li>
                        <li class="list-menu text-uppercase d-flex align-items-center">
                            <p class="text-uppercase"> dc merchandise</p>
                            <div class="img-container-info"> 
                                <a href="#"><img class="img-width" src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="merchandise.img"></a>
                            </div>
                        </li>
                        <li class="list-menu text-uppercase d-flex align-items-center">
                            <p class="text-uppercase"> subscription</p>
                            <div class="img-container-info">   
                                <a href="#"><img class="img-width" src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="subscription.img"></a>
                            </div>
                        </li>
                        <li class="list-menu text-uppercase d-flex align-items-center">
                            <p class="text-uppercase">comic shop locator</p>
                            <div class="img-container-info padd-img"> 
                                <a href="#"><img class="img-width" src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="comic.img"></a>
                            </div>
                        </li>
                        <li class="list-menu text-uppercase d-flex align-items-center">
                            <p class="text-uppercase"> dc power visa</p>
                            <div class="img-container-info">  
                                <a href="#"><img class="img-width" src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="power.img"></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- font-s text-light text-start ms-2 text-uppercase fw-normal --}}

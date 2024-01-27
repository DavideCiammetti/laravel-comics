<header id="header">
    <div class="blue-line">
      <div class="blue-second-line d-flex justify-content-end align-items-center">
        <p class="col-blue-300 fw-bolder register-visa"> DC POWER <span class="rm">RM</span>VISA <span><i class="fa-regular fa-registered"></i></span></p>
        <p class="col-blue-300 fw-bolder addition-dc-sites">ADDITIONAL DC SITES <span ><i class=" align-text-top fa-solid fa-sort-down"></i></span></p>
      </div>
    </div>

    <nav>
        {{-- menu --}}
        <ul class="d-flex list-unstyled gap-5 text-decoration-none justify-content-center">
            <li>
                {{-- logo --}}
                <div class="logo-img-container">
                    <img class="logo-img" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="img.dc-logo">
                </div>
            </li>
            <li class="mt-5 border-bot-blue">
                <a class="col-blue-300 fw-bolder" href="#">CHARTERS</a>
            </li>
            <li class="mt-5 border-bot-blue">
                <a class="col-blue-300 fw-bolder" href="#">COMICS</a>
            </li>
            <li class="mt-5 border-bot-blue">
                <a class="col-blue-300 fw-bolder" href="#">MOVIES</a>
            </li>
            <li class="mt-5 border-bot-blue">
                <a class="col-blue-300 fw-bolder" href="">TV</a>
            </li>
            <li class="mt-5 border-bot-blue">
                <a class="col-blue-300 fw-bolder" href="#">GAMES</a>
            </li>
            <li class="mt-5 border-bot-blue">
                <a class="col-blue-300 fw-bolder" href="#">COLLECTIBLES</a>
                
            </li>
            <li class="mt-5 border-bot-blue">
                <a class="col-blue-300 fw-bolder"  href="#">VIDEOS</a>
                
            </li>
            <li class="mt-5 border-bot-blue">
                <a class="col-blue-300 fw-bolder" href="#">FANS</a>
                
            </li>
            <li class="mt-5 border-bot-blue">
                <a class="col-blue-300 fw-bolder" href="#">NEWS</a>
                
            </li>
            <li class="mt-5 border-bot-blue">
                <a class="col-blue-300 fw-bolder" href="#">SHOP<i class="shop-list align-text-top fa-solid fa-sort-down"></i></a>
            </li>
            <li>
                @include('components.headerComponents.searchBar')
            </li>
        </ul>
        <div class="jumbotron">

        </div>
    </nav>
</header>
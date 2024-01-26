<header id="header">
    <div class="blue-line">
      <div class="blue-second-line d-flex justify-content-end align-items-center">
        <p class="fw-bolder register-visa"> DC POWER <span class="rm">RM</span>VISA <span><i class="fa-regular fa-registered"></i></span></p>
        <p class="fw-bolder addition-dc-sites">ADDITIONAL DC SITES <span ><i class=" align-text-top fa-solid fa-sort-down"></i></span></p>
      </div>
    </div>

    {{-- menu container --}}
    <div class="padding-18 d-flex justify-content-center align-items-center">
        {{-- logo --}}
        <div class="logo-img-container">
            <img class="logo-img" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="img.dc-logo">
        </div>
        {{-- menu --}}
        <nav>
            <ul class="d-flex list-unstyled gap-5 text-decoration-none">
                <li>
                    <a class="fw-bolder" href="#">CHARTERS</a>
                </li>
                <li>
                    <a class="fw-bolder" href="#">COMICS</a>
                </li>
                <li>
                    <a class="fw-bolder" href="#">MOVIES</a>
                </li>
                <li>
                    <a class="fw-bolder" href="">TV</a>
                </li>
                <li>
                    <a class="fw-bolder" href="#">GAMES</a>
                </li>
                <li>
                    <a class="fw-bolder" href="#">COLLECTIBLES</a>
                    
                </li>
                <li>
                    <a class="fw-bolder"  href="#">VIDEOS</a>
                    
                </li>
                <li>
                    <a class="fw-bolder" href="#">FANS</a>
                    
                </li>
                <li>
                    <a class="fw-bolder" href="#">NEWS</a>
                    
                </li>
                <li>
                    <a class="fw-bolder" href="#">SHOP<i class="shop-list align-text-top fa-solid fa-sort-down"></i></a>
                </li>
            </ul>
        </nav>
        @include('components.headerComponents.searchBar')
    </div>
</header>
<section id="header">
    <a href="{{ route('home') }}"><img src="https://cdn.discordapp.com/attachments/1076537937229008936/1110471127484076032/logo.png" class="logo" alt="logo"></a>

    <div>
        <ul id="navbar">
            <li>
                {{-- form di ricerca --}}
                <form class="d-flex @if (Route::currentRouteName() == 'login' || Route::currentRouteName() == 'register' || Route::currentRouteName() == 'announcement.create' || Route::currentRouteName() == 'revisor.index')d-none @endif" action="{{ route('search.announcements') }}" method="GET">
                    <input name="searched" class="inputx form-control me-2" type="search" placeholder="{{__('ui.buttonSearch')}}">
                    <button class="btn btn-outline-success" type="submit">{{__('ui.buttonSearch')}}</button>
                </form>
            </li>
            {{-- selezionare la lingua --}}
            <div class="select-menu">
                <div class="select-btn" id="select-btn">
                    <a href="#">
                        <span
                            class="icon-arrow flag-icon flag-icon-{{ Config::get('languages')[App::getLocale()]['flag-icon'] }}"></span>
                    </a>
                    {{-- <i class="icon-arrow fa-solid fa-language"></i> --}}
                </div>
                <ul class="list">
                    @php
                        $i = 1; 
                    @endphp

                    @foreach (Config::get('languages') as $lang => $language)
                        <li class="option" style="--i:{{ $i }}">
                            {{-- <x-_locale class="" lang="it" /> --}}

                            {{-- @if ($lang != App::getLocale()) --}}
                                <a class=" dropdown-item" href="{{ route('lang.switch', $lang) }}"><span
                                        class=" flag-icon flag-icon-{{ $language['flag-icon'] }}"></span></a>
                            {{-- @endif --}}
                        </li>

                        @php
                            $i++; // Incrémentez la variable $i à chaque itération
                        @endphp
                    @endforeach
                </ul>
            </div>





            @guest
                <li><a class="text-white" href="{{ route('home') }}">Home</a></li>
                <!-- <li><a href="shop.html">articoli</a></li>            -->
                <li><a class="text-white" href="{{ route('chisiamo') }}">{{__('ui.navbarAboutUs')}}</a></li>
                <li><a class="btn btn-outline-light @if (Route::currentRouteName() == 'register') d-none @endif"
                        href="{{ route('register') }}">{{__('ui.navbarRegister')}}</a></li>
                <!-- <li id ="lg-bag"><a href="cart.html"><i class="far fa-shopping-cart"></i></a></li>-->
                <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
                <li><a class="btn btn-outline-light @if (Route::currentRouteName() == 'login') d-none @endif"
                        href="{{ route('login') }}">{{__('ui.navbarLogin')}}</a></li>
                        <div class="selectmenu">
                            <div class="selectbtn" id="selectbtn">
                                <a href="#">
                                    <span
                                        class="iconarrow flag-icon flag-icon-{{ Config::get('languages')[App::getLocale()]['flag-icon'] }}"></span>
                                </a>
                                {{-- <i class="icon-arrow fa-solid fa-language"></i> --}}
                            </div>
                            <ul class="lista">
                                @php
                                    $i = 1; // Initialisez la variable $i à 1 avant la boucle foreach
                                @endphp
            
                                @foreach (Config::get('languages') as $lang => $language)
                                    <li class="optione" style="--i:{{ $i }}">
                                        {{-- <x-_locale class="" lang="it" /> --}}
            
                                        
                                            <a class=" dropdown-item" href="{{ route('lang.switch', $lang) }}"><span
                                                    class=" flag-icon flag-icon-{{ $language['flag-icon'] }}"></span></a>
                                       
                                    </li>
            
                                    @php
                                        $i++; // Incrémentez la variable $i à chaque itération
                                    @endphp
                                @endforeach
                            </ul>
                        </div>
            @else
                <li><a class="text-white" href="{{ route('home') }}">Home</a></li>

                {{-- logica user3 --}}
                @if (Auth::user()->is_revisor)
                    <li>
                        <a class="btn btn-outline-light" href="{{ route('revisor.index') }}">{{__('ui.navbarRevisor')}}
                            <span>{{ App\Models\Announcement::toBeRevisionedCount() }}</span>
                            <span class="visually-hidden">{{__('ui.navbarRevisorInfo')}}</span>
                        </a>
                    </li>
                @endif
                {{-- logica user3 --}}

                {{-- Icona chiusura navbar MOBILE --}}
                <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
                {{-- fineIcona chiusura navbar MOBILE --}}
                
                {{-- rotta chiedi di lavorare con noi(revisore) --}}
                <li><a class=" btn btn-outline-light" href="{{ route('become.revisor') }}">{{__('ui.navbarWorkWithUs')}}</a></li>
                {{-- fine rotta chiedi di lavorare con noi(revisore) --}}

                {{-- <li><a class=" btn btn-outline-light" href="#">i miei annunci</a></li> --}}
                <li><a class=" btn btn-outline-light" href="{{ route('announcement.create') }}">{{__('ui.navbarCreate')}}</a></li>
                <li class="nav-link">{{ Auth::user()->name }}</li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle"
                            height="22" alt="" loading="lazy" />
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        {{-- <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li> --}}
                        <form id="form-logout" action="{{ route('logout') }}" method="post" class="d-none">
                            @csrf
                        </form>
                        <li class="nav-item"><a class="btn btn-outline-dark" href="/logout"
                                onclick="event.preventDefault();
           getElementById('form-logout').submit()">{{__('ui.navbarLogout')}}</a>
                        </li>
                        {{-- <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                    </ul>
                </li>
                <div class="selectmenu">
                    <div class="selectbtn" id="selectbtn">
                        <a href="#">
                            <span
                                class="iconarrow flag-icon flag-icon-{{ Config::get('languages')[App::getLocale()]['flag-icon'] }}"></span>
                        </a>
                        {{-- <i class="icon-arrow fa-solid fa-language"></i> --}}
                    </div>
                    <ul class="lista">
                        @php
                            $i = 1; 
                        @endphp
    
                        @foreach (Config::get('languages') as $lang => $language)
                            <li class="optione" style="--i:{{ $i }}">
                                {{-- <x-_locale class="" lang="it" /> --}}
    
                               
                                    <a class=" dropdown-item" href="{{ route('lang.switch', $lang) }}"><span
                                            class=" flag-icon flag-icon-{{ $language['flag-icon'] }}"></span></a>
                               
                            </li>
    
                            @php
                                $i++; // Incrémentez la variable $i à chaque itération
                            @endphp
                        @endforeach
                    </ul>
                </div>
            @endguest
            

        </ul>
    </div>
    <div id="mobile">
        {{-- Carrello ICONA -> pagina ancora inesistente --}}
        {{-- <a href=""><i class="far fa-shopping-cart"></i></a> --}}
        {{-- Carrello ICONA -> pagina ancora inesistente --}}
        <i id="bar" class="fa-solid fa-bars"></i>
    </div>
</section>


<script>
    const bar = document.getElementById('bar');
    const nav = document.getElementById('navbar');
    const close = document.getElementById('close');

    if (bar) {
        bar.addEventListener('click', () => {
            nav.classList.add('active');
        })
    }

    if (close) {
        close.addEventListener('click', () => {
            nav.classList.remove('active');
        })
    }

    const selectBtn = document.getElementById("select-btn");
    const text = document.getElementById("text");
    const option = document.getElementsByClassName("option");
    const icon = document.getElementsByClassName("icon");



    selectBtn.addEventListener('click', function() {
        selectBtn.classList.toggle('active');

    });


    for (options of option) {
        options.onclick = function() {

            selectBtn.innerHTML = this.innerHTML;
            selectBtn.classList.remove('active');
        }
    }


    //logica per lingue versione mobile

    const selectBtn2 = document.getElementById("selectbtn");

    const optione = document.getElementsByClassName("optione");
    // const icon = document.getElementsByClassName("icon");



    selectBtn2.addEventListener('click', function() {
        selectBtn2.classList.toggle('active');

    });


    for (options of optione) {
        options.onclick = function() {

            selectBtn.innerHTML = this.innerHTML;
            selectBtn.classList.remove('active');
        }
    }
</script>

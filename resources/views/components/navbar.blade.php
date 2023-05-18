<section id="header">
    <a href="{{ route('home') }}"><img src="{{ Storage::url('images/logo.png') }}" class="logo" alt="logo"></a>

    <div>
        <ul id="navbar">
            <li>
                {{-- orm di ricerca --}}
                <form class="d-flex" action="{{ route('search.announcements') }}" method="GET">
                    <input name="searched" class="inputx form-control me-2" type="search" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </li>

        

            <div class="select-menu">
                <div class="select-btn" id="select-btn">
                   
                    <i class="icon-arrow fa-solid fa-language"></i>
                </div>
                <ul class="list">
                    <li class="option" style="--i:1;">
                        <x-_locale class="" lang="it" />
                        
                    </li>
                    <li class="option" style="--i:2;">
                        <x-_locale class="" lang="es" />
                        
                    </li>
                    <li class="option" style="--i:3;">
                        <x-_locale class="" lang="en" />
                        
                    </li>
                </ul>
            </div>





            @guest
                <li><a class="text-white" href="{{ route('home') }}">Home</a></li>
                <!-- <li><a href="shop.html">articoli</a></li>            -->
                <li><a class="text-white" href="{{ route('chisiamo') }}">Chi siamo</a></li>
                <li><a class="btn btn-outline-light @if (Route::currentRouteName() == 'register') d-none @endif"
                        href="{{ route('register') }}">registrati</a></li>
                <!-- <li id ="lg-bag"><a href="cart.html"><i class="far fa-shopping-cart"></i></a></li>-->
                <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
                <li><a class="btn btn-outline-light @if (Route::currentRouteName() == 'login') d-none @endif"
                        href="{{ route('login') }}">login</a></li>
                        <div class="selectmenu">
                            <div class="selectbtn" id="selectbtn">
                               
                                <i class="iconarrow fa-solid fa-language"></i>
                            </div>
                            <ul class="lista">
                                <li class="optione" style="--i:1;">
                                    <x-_locale class="" lang="it" />
                                    
                                </li>
                                <li class="optione" style="--i:2;">
                                    <x-_locale class="" lang="es" />
                                    
                                </li>
                                <li class="optione" style="--i:3;">
                                    <x-_locale class="" lang="en" />
                                    
                                </li>
                            </ul>
                        </div>
                        
            @else
                <li><a class="text-white" href="{{ route('home') }}">Home</a></li>

                {{-- logica user3 --}}
                @if (Auth::user()->is_revisor)
                    <li>
                        <a class="btn btn-outline-light" href="{{ route('revisor.index') }}">zona revisore
                            <span>{{ App\Models\Announcement::toBeRevisionedCount() }}</span>
                            <span class="visually-hidden">messagi non letti</span>
                        </a>
                    </li>
                @endif
                {{-- logica user3 --}}

                {{-- Icona chiusura navbar MOBILE --}}
                <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
                {{-- fineIcona chiusura navbar MOBILE --}}
                {{-- rotta chiedi di lavorare con noi(revisore) --}}
                <li><a class=" btn btn-outline-light" href="{{ route('become.revisor') }}">Lavora con noi</a></li>
                {{-- fine rotta chiedi di lavorare con noi(revisore) --}}

                {{-- <li><a class=" btn btn-outline-light" href="#">i miei annunci</a></li> --}}
                <li><a class=" btn btn-outline-light" href="{{ route('announcement.create') }}">crea annunci</a></li>
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
           getElementById('form-logout').submit()">logout</a>
                        </li>
                        {{-- <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li> --}}
                    </ul>
                </li>
                <div class="selectmenu">
                    <div class="selectbtn" id="selectbtn">
                       
                        <i class="iconarrow fa-solid fa-language"></i>
                    </div>
                    <ul class="lista">
                        <li class="optione" style="--i:1;">
                            <x-_locale class="" lang="it" />
                            
                        </li>
                        <li class="optione" style="--i:2;">
                            <x-_locale class="" lang="es" />
                            
                        </li>
                        <li class="optione" style="--i:3;">
                            <x-_locale class="" lang="en" />
                            
                        </li>
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

<section id="header">
    <a href="{{ route('home') }}"><img src="{{ Storage::url('img/logo.png') }}" class="logo" alt="logo"></a>

    <div>
        <ul id="navbar">
            <li>
                {{-- orm di ricerca --}}
                <form class="d-flex" action="{{route('search.announcements')}}" method="GET">
                    <input name="searched" class="inputx form-control me-2" type="search" placeholder="Search" aria-label="Search" >
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </li>
<<<<<<< HEAD
            <li class="nav-item">
                <x_locale lang='en' nation='gb'/> 
             </li>
             <li class="nav-item">
                 <x_locale lang='it' nation='it' /> 
             </li>
             <li class="nav-item">
                 <x_locale lang='es' nation='es' /> 
             </li>
=======

            {{-- FLAG --}}
            <li class="nav-item">
                <x-_locale lang="it" nation="it"/>
            </li>
            <li class="nav-item">
                <x-_locale lang="es" nation="es"/>
            </li>
            <li class="nav-item">
                <x-_locale lang="en" nation="gb"/>
            </li>
            {{-- FLAG --}}





>>>>>>> 5ceb3742ce5bebf65692e23993a7e0c4ca239276
            @guest
                <li><a class="text-white" href="{{ route('home') }}">Home</a></li>
                <!-- <li><a href="shop.html">articoli</a></li>            -->
                <li><a class="text-white" href="{{ route('chisiamo') }}">Chi siamo</a></li>
                <li><a class="btn btn-outline-light @if (Route::currentRouteName() == 'register') d-none @endif"
                        href="{{ route('register') }}">registrati</a></li>
                <!-- <li id ="lg-bag"><a href="cart.html"><i class="far fa-shopping-cart"></i></a></li>-->
                <a href="#" id="close"><i class="far fa-times"></i></a>
                <li><a class="btn btn-outline-light @if (Route::currentRouteName() == 'login') d-none @endif"
                        href="{{ route('login') }}">login</a></li>
                        
            @else
            <li><a class="text-white" href="{{ route('home') }}">Home</a></li>

                    {{-- logica user3 --}}
                    @if(Auth::user()->is_revisor)
                    <li>
                        <a href="{{route('revisor.index')}}">zona revisore
                            <span>{{App\Models\Announcement::toBeRevisionedCount()}}</span>
                            <span class="visually-hidden">messagi non letti</span>
                        </a>
                    </li>
                    @endif
                    {{-- logica user3 --}}


                <a href="#" id="close"><i class="far fa-times"></i></a>
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
            @endguest

        </ul>
    </div>
    <div id="mobile">
        <a href=""><i class="far fa-shopping-cart"></i></a>
        <i id="bar" class="fas fa-outdent"></i>
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
</script>

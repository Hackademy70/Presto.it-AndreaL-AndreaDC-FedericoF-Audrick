<section id="header">
    <a href="{{ route('home') }}"><img src="{{ Storage::url('img/logo.png') }}" class="logo" alt="logo"></a>

    <div>
        <ul id="navbar">
            @guest
                <li>
                    <form class="d-flex">
                        <input class="inputx form-control me-2" type="search" placeholder="Search" aria-label="Search" >
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </li>
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
                <a href="#" id="close"><i class="far fa-times"></i></a>

                <li><a class=" btn btn-outline-light" href="about.html">i miei annunci</a></li>
                <li><a class=" btn btn-outline-light" href="{{ route('announcement.create') }}">crea annunci</a></li>
                <li><a class=" btn btn-outline-light" href="about.html">{{ Auth::user()->name }}</a></li>

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

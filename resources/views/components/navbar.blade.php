 {{-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
     <div class="container-fluid">
         <a class="navbar-brand" href="{{ route('home') }}">Navbar</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
             aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                 <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                 </li>
                 @guest
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('register') }}">registrati</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('login') }}">login</a>
                     </li>
                 @else
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                             data-bs-toggle="dropdown" aria-expanded="false">
                             {{ Auth::user()->name }}
                         </a>
                         <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                             <li><a class="dropdown-item" href="#">Action</a></li>
                             <li><a class="dropdown-item" href="{{ route('announcement.create') }}">crea annuncio</a></li>
                             <li>
                                 <hr class="dropdown-divider">
                             </li>
                             <li><a class="dropdown-item" href="/logout"
                                     onclick="event.preventDefault();
                        getElementById('form-logout').submit()">logout</a>
                             </li>
                             <form id="form-logout" action="{{ route('logout') }}" method="post" class="d-none">
                                 @csrf
                             </form>
                         </ul>

                     </li>
                 @endguest
               
             </ul>
             <form class="d-flex" role="search">
                 <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                 <button class="btn btn-outline-success" type="submit">Search</button>
             </form>
         </div>
     </div>
 </nav> --}}
 <section id="header">
    <a href="{{ route('home') }}"><img src="{{Storage::url('img/logo.png')}}" class="logo" alt="logo"></a>
    
    <div>
        <ul id="navbar">
            @guest
            <li class="container-fluid">
                <form class="d-flex">
                  <input class="inputx form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </li>
            <li><a class="text-white" href="{{ route('home') }}">Home</a></li>
            <!-- <li><a href="shop.html">articoli</a></li>            -->
            <li><a class="text-white" href="{{ route('chisiamo') }}">Chisiamo</a></li>
            <li><a class="btn btn-outline-light" href="{{ route('register') }}">registrati</a></li>
            <!-- <li id ="lg-bag"><a href="cart.html"><i class="far fa-shopping-cart"></i></a></li>-->
            <a href="#" id ="close"><i class="far fa-times"></i></a>
            <li><a class="btn btn-outline-light" href="{{ route('login') }}">login</a></li>
            @else
            <a href="#" id ="close"><i class="far fa-times"></i></a>
                
                <li><a class=" btn btn-outline-light" href="about.html">i miei annunci</a></li>
                <li><a class=" btn btn-outline-light" href="{{ route('announcement.create') }}">crea annunci</a></li>
                <li><a class=" btn btn-outline-light" href="about.html">{{ Auth::user()->name }}</a></li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle" height="22"
                        alt="" loading="lazy" />
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
    <div id ="mobile">
        <a href=""><i class="far fa-shopping-cart"></i></a>
        <i id="bar" class="fas fa-outdent"></i>
    </div>
</section>
<script>
    const bar = document.getElementById('bar');
const nav = document.getElementById('navbar');
const close = document.getElementById('close');
if(bar){
    bar.addEventListener('click', ()=>{
        nav.classList.add('active') ; 
    })
}

if(close){
    close.addEventListener('click', ()=>{
        nav.classList.remove('active') ; 
    })
}
</script>
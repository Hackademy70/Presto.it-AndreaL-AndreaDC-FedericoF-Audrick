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

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="navContain container-fluid mx-5 d-flex">
        <div>
            <a class="navbar-brand" href="{{ route('home') }}">Navbar</a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <form class="d-flex ms-auto my-3 mx-4">
                <input class=" form-control  me-2" type="search" placeholder="Search" aria-label="Search" >
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

            
            
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            @guest
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active,kylilu
                " aria-current="page" href="{{ route('chisiamo') }}">Chi siamo</a>
            </li>
            
            <li class="nav-but ">
                <a class="btn btn-outline-light" aria-current="page" href="{{ route('register') }}">Registrati</a>
            </li>
        
           
            <li class="nav-item">
                <a class="btn btn-outline-light" href="{{ route('login') }}">Accedi</a>
            </li>
            @else
            
            <li class="nav-item">
                <a class="nav-link " href="{{ route('announcement.create') }}">crea annuncio</a>
            </li>
            
            <li class="nav-item mx-2">
                <a class="btn btn-outline-light dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    {{-- <li><a class="dropdown-item" href="{{ route('announcement.create') }}">crea annuncio</a></li> --}}
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    
                    <form id="form-logout" action="{{ route('logout') }}" method="post" class="d-none">
                        @csrf
                    </form>
                </ul>

            </li>
            <li class="nav-item"><a class="btn btn-outline-light" href="/logout"
                onclick="event.preventDefault();
   getElementById('form-logout').submit()">logout</a>
            </li>
            
            @endguest
        </ul>


        </div>
    </div>
</nav>
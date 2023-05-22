{{-- <div class="container">
    <ul class="d-flex justify-content-between">
        @foreach ($categories as $category)
        <li>
            <a href="{{ route('category.search', compact('category')) }}">{{$category->name}}</a>
        </li>
        @endforeach
    </ul>
</div> --}}

<nav id="myNavbar" class="navbar navbar-expand-lg navbar-dark sticky-top @if (Route::currentRouteName() == 'login' || Route::currentRouteName() == 'register' || Route::currentRouteName() == 'announcement.create' || Route::currentRouteName() == 'revisor.index')d-none @endif">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler container" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            {{-- <span class="navbar-toggler-icon"></span> --}}
            Category
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
               

                @if (App::isLocale('it'))
                    @foreach ($categories as $category)
                        <li>
                            <a class="nav-link" href="{{ route('category.search', compact('category')) }}">{!! Str::upper($category->name) !!}</a>
                        </li>
                    @endforeach
                @elseif (App::isLocale('es'))
                    @foreach ($categories as $category)
                        <li>
                            <a class="nav-link" href="{{ route('category.search', compact('category')) }}">{!! Str::upper($category->es) !!}</a>
                        </li>
                    @endforeach
                @elseif (App::isLocale('en'))
                    @foreach ($categories as $category)
                        <li>
                            <a class="nav-link" href="{{ route('category.search', compact('category')) }}">{!! Str::upper($category->en) !!}</a>
                        </li>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</nav>

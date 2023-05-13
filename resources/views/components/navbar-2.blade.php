{{-- <div class="container">
    <ul class="d-flex justify-content-between">
        @foreach ($categories as $category)
        <li>
            <a href="{{ route('category.search', compact('category')) }}">{{$category->name}}</a>
        </li>
        @endforeach
    </ul>
</div> --}}

<nav id="myNavbar" class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler container" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            {{-- <span class="navbar-toggler-icon"></span> --}}
            Category
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
               

                @foreach ($categories as $category)
                    <li>
                        
                        <a class="nav-link" href="{{ route('category.search', compact('category')) }}">{!! Str::upper($category->name) !!}</a>
                    </li>
                @endforeach
                {{-- <a class="nav-link active" aria-current="page" href="#about">io</a>
                <a class="nav-link" href="#skills">competenze</a>
                <a class="nav-link" href="#experience">esperienze</a>
                <a class="nav-link" href="#education">educazione</a>
                <a class="nav-link" href="#portfolio">portfolio</a>
                <a class="nav-link" href="#recommendations">ricommandazioni</a> --}}
            </div>
        </div>
    </div>
</nav>

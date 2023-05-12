{{-- <div class="container">
    <ul class="d-flex justify-content-between">
        @foreach ($categories as $category)
        <li>
            <a href="{{ route('category.search', compact('category')) }}">{{$category->name}}</a>
        </li>
        @endforeach
    </ul>
</div> --}}

<nav class="container-fluid my-bg-dark px-5 py-2">
    <div class="d-flex justify-content-between align-item-center px-5">
        @foreach ($categories as $category)
            <a class="my-link" href="{{ route('category.search', compact('category')) }}">{!! Str::upper($category->name) !!}</a>
        @endforeach
    </div>
</nav>
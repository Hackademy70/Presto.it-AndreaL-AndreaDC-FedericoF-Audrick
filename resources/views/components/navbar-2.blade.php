<div class="container">
    <ul class="d-flex justify-content-between">
        @foreach ($categories as $category)
        <li>
            <a href="{{ route('category.search', compact('category')) }}">{{$category->name}}</a>
        </li>
        @endforeach
    </ul>
</div>
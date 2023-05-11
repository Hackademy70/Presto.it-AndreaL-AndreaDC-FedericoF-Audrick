<x-layout>
    <h1>singolo annuncio</h1>
    <h3>{{$announcement->title}}</h3>
    <p class="card-text">{{$announcement->price}}</p>
    <p class="card-text">{{$announcement->body}}</p>
    <p class="card-text">{{$announcement->category}}</p>
</x-layout>
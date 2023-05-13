<x-layout>
    {{-- <h1>singolo annuncio</h1>
    <h3>{{$announcement->title}}</h3>
    <p class="card-text">{{$announcement->price}}</p>
    <p class="card-text">{{$announcement->body}}</p>
    <p class="card-text">{{$announcement->category}}</p> --}}

    <div class="container pt-5">
        <div class="row align-items-center">
            <div class="col-6 ">
                <img src="https://picsum.photos/200" alt="img" width="80%" height="80%">
            </div>
            <div class="col-6">
                <div class="single-pro-details">
                    <h6>{{$announcement->category->name}}</h6>
                    <h4>{{$announcement->title}}</h4>
                    <h2>${{$announcement->price}}</h2>
                    <select>
                        <option>Select Size</option>
                        <option>XL</option>
                        <option>XXL</option>
                        <option>Small</option>
                        <option>Large</option>
                    </select>
                    <input type="number" value="1">
                    <button class ="normal">Add To Cart</button>
                    <h4>Product Details</h4>
                    <span>
                        {{$announcement->body}}
                    </span>
                </div>
            </div>
        </div>
    </div>
</x-layout>
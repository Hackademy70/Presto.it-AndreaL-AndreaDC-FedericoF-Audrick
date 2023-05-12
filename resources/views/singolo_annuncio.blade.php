<x-layout>
    {{-- <h1>singolo annuncio</h1>
    <h3>{{$announcement->title}}</h3>
    <p class="card-text">{{$announcement->price}}</p>
    <p class="card-text">{{$announcement->body}}</p>
    <p class="card-text">{{$announcement->category}}</p> --}}

    <div class="container">
        <div class="row align-items-center">
            <div class="col-6 ">
                <img src="https://picsum.photos/200" alt="img">
            </div>
            <div class="col-6">
                <div class="single-pro-details">
                    <h6>Home / T-Shirt</h6>
                    <h4>Men's Fashion T Shirt</h4>
                    <h2>$139,00</h2>
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
                        Lorem ipsum dolor sit amet,
                         consectetur adipiscing elit, 
                         sed do eiusmod tempor incididunt 
                         ut labore et dolore magna aliqua.
                          Ut enim ad minim veniam, quis nostrud 
                          exercitation ullamco laboris nisi ut 
                          aliquip ex ea commodo consequat. Duis 
                          aute irure dolor in reprehenderit in voluptate
                           velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non
                             proident, sunt in culpa qui officia 
                             deserunt mollit anim id est laborum.
                    </span>
                </div>
            </div>
        </div>
    </div>
</x-layout>
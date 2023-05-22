<x-layout>
    {{-- <section id="prodetails" class="section-p1">
        @if ($announcement->images)
            <div class="carousel-inner d-flex justify-content-center">
                @foreach ($announcement->images as $image)
                    <div class="carousel-item @if ($loop->first) active @endif">
                        <img src="{{ Storage::url($image->path) }}" class="img-fluid p-3 rounded" alt="...">
                    </div>
                @endforeach
            </div>
        @else
            <div class="carousel-item active">
                <img src="https://th.bing.com/th/id/OIP.fPQn_oXIzbxBecSX5Z_gDQHaHa?pid=ImgDet&rs=1" class="d-block "
                    width="100%" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://imgs.cozylands.com/uploads/public/604/19b/c98/60419bc9856b0958441377.jpg"
                    class="d-block" width="100%" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://th.bing.com/th/id/OIP.MgujNcTFKbg-vAT4G4eZ9wHaHa?pid=ImgDet&w=207&h=207&c=7&dpr=1,3"
                    class="d-block" width="100%" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/200" width="100%" class="d-block" alt="...">
            </div>

        @endif
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
        </div>
        <div class="single-pro-details">
            <h6>{{ $announcement->category->name }}</h6>
            <h4>{{ $announcement->title }}</h4>
            <h2>{{ $announcement->price }}</h2>
            <select>
                <option>Select Size</option>
                <option>XL</option>
                <option>XXL</option>
                <option>Small</option>
                <option>Large</option>
            </select>
            <input type="number" value="1">
            <button class="normal">Add To Cart</button>
            <h4>Product Details</h4>
            <span>
                {{ $announcement->body }}
            </span>
        </div>
        </div>
    </section> --}}
    <section id="prodetails" class="section-p1">
        {{-- <div class="single"> --}}

            <div class="single-pro-image">

                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                    </div>
                    <div class="carousel-inner">
                        @foreach ($announcement->images as $image)
                            <div class="carousel-item @if ($loop->first) active @endif">

                                <img src="{{ Storage::url($image->path) }}" class="bigimg d-block" width="100%"
                                    alt="...">
                            </div>
                        @endforeach

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <div class="small-img-group">
                    @foreach ($announcement->images as $image)
                        <div class="small-img-col">
                            <img src="{{ Storage::url($image->path) }}" class="small-img" width="100%" height="100%"
                                alt="...">
                        </div>
                    @endforeach
                    {{-- <div class="small-img-col">
                      <img src="img/products/f1.jpg" width="100%" class="small-img" alt>
                      
                       </div>
                      <div class="small-img-col">
                      <img src="img/products/f2.jpg" width="100%" class="small-img" alt>
                      </div>
                      <div class="small-img-col">
                      <img src="img/products/f3.jpg" width="100%" class="small-img" alt>
                      </div>
                      <div class="small-img-col">
                      <img src="img/products/f4.jpg" width="100%" class="small-img" alt>
                      </div> --}}

                </div>
            </div>
            <div class="single-pro-details">
                <h6>{{ $announcement->category->name }}</h6>
                <h4>{{ $announcement->title }}</h4>
                <h2>{{ $announcement->price }}</h2>
                <select>
                    <option>Select Size</option>
                    <option>XL</option>
                    <option>XXL</option>
                    <option>Small</option>
                    <option>Large</option>
                </select>
                <input type="number" value="1">
                <button class="normal">Add To Cart</button>
                <h4>Product Details</h4>
                <span>
                    {{ $announcement->body }}
                </span>
            </div>
        </div>
        {{-- </div> --}}
    </section>

    <script>
        let MainImg = document.getElementById("MainImg");
        let smallimg = document.getElementsByClassName("small-img");


        smallimg[0].onclick = function() {
            MainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function() {
            MainImg.src = smallimg[1].src;

        }
        smallimg[2].onclick = function() {
            MainImg.src = smallimg[2].src;

        }
        smallimg[3].onclick = function() {
            MainImg.src = smallimg[3].src;

        }
    </script>



</x-layout>

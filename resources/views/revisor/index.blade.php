<x-layout>

   <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>{!!$announcement_to_check ? "ecco annuncio da revisionare" : "non ci sono annunci"!!}</h1>
                @if($announcement)
                <div class="col-12">
                    <form action="{{route('revisor.getback', ['announcement'=>$announcement])}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button  class="btn btn-warning container text-white" type="submit">annulla ultima revisione</button>    
                    </form>
                </div>
                @endif
                
                
            </div>
        </div>
    </div>
    @if ($announcement_to_check)
        {{-- <div class="container">
            <div class="row">
                <div class="col-12">
                    <div id="carouselExampleCaptions" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://picsum.photos/200" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>{{ $announcement_to_check->title }}</h5>
                                    <p>{{ $announcement_to_check->body }}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
        </div> --}}
        <section id="prodetails" class="section-p1">
            <div class="single">
            <div class="single-pro-image">
    
                <div id="carouselExampleIndicators" class="carousel slide bigimg active" data-bs-ride="carousel" 
                >
      
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://th.bing.com/th/id/OIP.fPQn_oXIzbxBecSX5Z_gDQHaHa?pid=ImgDet&rs=1" class="d-block " width="100%"  alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://imgs.cozylands.com/uploads/public/604/19b/c98/60419bc9856b0958441377.jpg" class="d-block"  width="100%"  alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://th.bing.com/th/id/OIP.MgujNcTFKbg-vAT4G4eZ9wHaHa?pid=ImgDet&w=207&h=207&c=7&dpr=1,3" class="d-block"  width="100%" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://picsum.photos/200"  width="100%"  class="d-block" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                
    
                <div class="small-img-group">
                    <div class="small-img-col  active">
                        <img src="https://th.bing.com/th/id/OIP.fPQn_oXIzbxBecSX5Z_gDQHaHa?pid=ImgDet&rs=1" width="100%"
                            class="small-img" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" alt>
                    </div>
                    <div class="small-img-col">
                        <img src="https://imgs.cozylands.com/uploads/public/604/19b/c98/60419bc9856b0958441377.jpg"
                            width="100%" class="small-img"  data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" alt>
                    </div>
                    <div class="small-img-col">
                        <img src="https://th.bing.com/th/id/OIP.MgujNcTFKbg-vAT4G4eZ9wHaHa?pid=ImgDet&w=207&h=207&c=7&dpr=1,3"
                            width="100%" class="small-img" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" alt>
                    </div>
                    <div class="small-img-col">
                        <img src="https://picsum.photos/200" width="100%" class="small-img" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4" alt>
                    </div>
    
                </div>
    
            </div>
    
            <div class="single-pro-details">
                <h6>{{$announcement_to_check->category->name}}</h6>
                <h4>{{$announcement_to_check->title}}</h4>
                <h2>{{$announcement_to_check->price}}</h2>
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
                    {{$announcement_to_check->body}}
                </span>
            </div>
        </div>
        </section>
        
       
           
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <form action="{{ route('revisor.accept_announcement', ['announcement' => $announcement_to_check]) }}"
                        method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="container btn btn-success" type="submit">accetta</button>
                    </form>
                </div>

                <div class="col-6">
                    <form action="{{ route('revisor.reject_announcement', ['announcement' => $announcement_to_check]) }}"
                        method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="container btn btn-danger" type="submit">rifiuta</button>
                    </form>
                </div>
            </div>
        </div>
        
        
    @endif
</x-layout>

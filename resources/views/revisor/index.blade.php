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
        <section id="prodetails" class="section-p1">
            <div class="single">
            <div class="single-pro-image">
                <div id="carouselExampleIndicators" class="carousel slide bigimg active" data-bs-ride="carousel">
                    @if ($announcement_to_check->images)
                    <div class="carousel-inner">
                        @foreach($announcement_to_check->images as $image)
                        <div class="carousel-item @if($loop->first)active @endif">
                            <img src="{{Storage::url($image->path)}}" class="img-fluid p-3 rounded" alt="...">
                        </div>
                        @endforeach
                    </div>
                        @else
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
                     
                    @endif
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
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

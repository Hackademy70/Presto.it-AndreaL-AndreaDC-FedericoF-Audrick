<x-layout>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>{!! $announcement_to_check ? 'ecco annuncio da revisionare' : 'non ci sono annunci' !!}</h1>
                {{-- PUSANTE ANNULLA ULTIMA REVISIONE --}}
                @if ($announcement)
                    <div class="col-12">
                        <form action="{{ route('revisor.getback', ['announcement' => $announcement]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-warning container text-white" type="submit">annulla ultima
                                revisione</button>
                        </form>
                    </div>
                @endif
                {{-- FINE PUSANTE ANNULLA ULTIMA REVISIONE --}}
            </div>
        </div>
    </div>

    {{-- Annunci da revisionare --}}
    @if ($announcement_to_check)

    <div class="container ">
        <h1 class="text-center my-4">Articoli inseriti</h1>
        @if ($announcement_to_check->images)
        <div class="row">
            @foreach ($announcement_to_check->images as $image)
            <div class="col-12 col-lg-6 col-md-6 col-sm-12 py-5 border">
                <div class="  d-flex justify-content-center">
                    <div class="col-6">
                        <img src="{{ Storage::url($image->path) }}" class="" width="60%" height="200px" hei
                            alt="...">
                    </div>
                    <div class="col-6">
                        <ul>
                            <li>Adulti: <span class="{{ $image->adult }}"></span></li>
                            <li>Satira: <span class="{{ $image->spoof }}"></span></li>
                            <li>Medicina: <span class="{{ $image->medical }}"></span></li>
                            <li>Violenza: <span class="{{ $image->violence }}"></span></li>
                            <li>Non adatto: <span class="{{ $image->racy }}"></span></li>
                        </ul>
                    </div>
                </div>
                <div>
                    @if ($image->labels)
                        <p>TAGS:</p>
                        @foreach ($image->labels as $label)
                            <span style="cursor: default" class="btn btn-dark mb-2">{{ $label }}</span
                                class="btn btn-dark mb-2">
                        @endforeach
                    @endif
                </div>
            </div>
        @endforeach
        </div>
       
     @endif
    </div>
        {{-- <section id="prodetails" class="section-p1 py-5">
            <h1 class="text-center">Titolo , prezzo , descrizione</h1>
           
            <div class="row mx-5 border my-5 mx-5">
                
                <div class="col single-pro-image ">

                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        
                        <div class="carousel-inner">
                            @foreach ($announcement_to_check->images as $image)
                                <div class="carousel-item @if ($loop->first) active @endif">

                                    <img src="{{ Storage::url($image->path) }}" class="bigimg d-block" width="100%"
                                       height=""  alt="...">
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
                        @php
                        $i = 0; 
                        @endphp
                        @foreach ($announcement_to_check->images as $image)
                            
                            <div class="card small-img-col">
                                <img src="{{ Storage::url($image->path) }}" class="small-img" width="100%"
                                height="150px"     alt="..." data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$i}}"
                                class="active" aria-current="true" aria-label="Slide {{$i+1}}">
                            </div>
                            @php
                            $i++; 
                            @endphp
                        @endforeach
                      

                    </div>
                </div>
                <div class="single-pro-details mx-7 col">
                    <h6>{{ $announcement_to_check->category->name }}</h6>
                    <h4>{{ $announcement_to_check->title }}</h4>
                    <h2>{{ $announcement_to_check->price }}</h2>
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
                        {{ $announcement_to_check->body }}
                    </span>
                </div>
            </div>

        </section> --}}
        <section id="prodetails" class="section-p1 py-5 d-flex justify-content-center">
        
       
            <div class="row mx-5 col-8">
                
                <div class="col-12 single-pro-image col-sm-12">
    
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        
                        <div class="carousel-inner">
                            @foreach ($announcement_to_check->images as $image)
                                <div class="carousel-item @if ($loop->first) active @endif">
    
                                    <img src="{{ Storage::url($image->path) }}" class="bigimg d-block" width="100%"
                                       height="450px"  alt="...">
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
                        @php
                        $i = 0; 
                        @endphp
                        @foreach ($announcement_to_check->images as $image)
                            
                            <div class="card small-img-col">
                                <img src="{{ Storage::url($image->path) }}" class="small-img" width="100%"
                                height="125px"     alt="..." data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$i}}"
                                class="active" aria-current="true" aria-label="Slide {{$i+1}}">
                            </div>
                            @php
                            $i++; 
                            @endphp
                        @endforeach
                      
    
                    </div>
                </div>
                <div class="single-pro-details mx-7 col-12 col-md col-sm-12">
                    <h6>{{ $announcement_to_check->category->name }}</h6>
                    <h4>{{ $announcement_to_check->title }}</h4>
                    <h2>{{ $announcement_to_check->price }}</h2>
                    <select>
                        <option>Select Size</option>
                        <option>XL</option>
                        <option>XXL</option>
                        <option>Small</option>
                        <option>Large</option>
                    </select>
                    <input type="number" value="1">
                    <button class="normal btn ">Add To Cart</button>
                    <h4>Product Details</h4>
                    <span>
                        {{ $announcement_to_check->body }}
                    </span>
                </div>
            </div>
    
        </section>





        {{-- PULSANTI ACCETTA E RIFIUTA --}}
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <form
                        action="{{ route('revisor.accept_announcement', ['announcement' => $announcement_to_check]) }}"
                        method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="container btn btn-success" type="submit">accetta</button>
                    </form>
                </div>

                <div class="col-6">
                    <form
                        action="{{ route('revisor.reject_announcement', ['announcement' => $announcement_to_check]) }}"
                        method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="container btn btn-danger" type="submit">rifiuta</button>
                    </form>
                </div>
            </div>
        </div>
        {{-- fine PULSANTI ACCETTA E RIFIUTA --}}
    @else
        <div class="contain" style="min-height:50vh">

        </div>
    @endif
</x-layout>

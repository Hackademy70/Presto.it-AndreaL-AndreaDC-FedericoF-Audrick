<div class="single-pro-image">
    <div id="carouselExampleIndicators" class="carousel slide bigimg active">
        @if ($announcement_to_check->images)
            <div class="carousel-inner">
                @foreach ($announcement_to_check->images as $image)
                    <div class="img-tag carousel-item @if ($loop->first) active @endif">
                       <div class="d-flex">
                        <img src="{{ Storage::url($image->path) }}" class="" width="60%" hei alt="...">
                        
                        {{-- aggiunta ora API --}}
                        <div>
                            <p>Adulti: <span class="{{ $image->adult }}"></span></p>
                            <p>Satira: <span class="{{ $image->spoof }}"></span></p>
                            <p>Medicina: <span class="{{ $image->medical }}"></span></p>
                            <p>Violenza: <span class="{{ $image->violence }}"></span></p>
                            <p>Non adatto: <span class="{{ $image->racy }}"></span></p>
                        </div>
                       </div>
                        

                        {{-- fine aggiunta --}}

                        <div>
                            @if ($image->labels)
                                <p>TAGS:</p>
                                @foreach ($image->labels as $label)
                                    <span style="cursor: default"
                                        class="btn btn-dark mb-2">{{ $label }}</span
                                        class="btn btn-dark mb-2">
                                @endforeach
                            @endif
                        </div>

                    </div>
                @endforeach
            </div>
        @else
            <div class="carousel-item active">
                <img src="https://th.bing.com/th/id/OIP.fPQn_oXIzbxBecSX5Z_gDQHaHa?pid=ImgDet&rs=1"
                    class="d-block " width="100%" alt="...">
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
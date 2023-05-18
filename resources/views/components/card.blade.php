<div class=" col-12 col-lg-3 col-md-6 col-sm-12 ">
    <div class="pro">
        <img src="{{!$announcement->images()->get()->isEmpty() ? Storage::url($announcement->
        images()->first()->path) : 'https//picsum.photos/200'}}" class="card-img-top p-3 rounded" alt="img non trovata">
        <div class="des">
            <span>{{ $announcement->created_at->format('d/m/y') }}</span>
            <h5>{{ $announcement->title }}</h5>
            <a href="#">{{ $announcement->category->name }}</a>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h4>{{ $announcement->price }}</h4>
        </div>
        {{-- Icona carrello -> pagina non ancora creata --}}
        {{-- <a href="#"><i class="fa-sharp fa-light fa-eye cart"></i></a> --}}
        {{-- Fine Icona carrello -> pagina non ancora creata --}}
        <a href="{{ route('announcement.show', ['announcement' => $announcement]) }}"><i
                class="fa-solid fa-light fa-eye cart text-center"></i></a>
    </div>
</div>
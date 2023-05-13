<x-layout>


   
    {{-- sezione card ricerca per categoria--}}
    <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-header">
              <h1 class="section-title">Ricerca per categoria: {{ $category->name }}</h1>
              <div class="section-divider"></div>
            </div>
            <div class="row">
              @foreach($category->announcements as $element)
              {{-- <div class="col-12 col-md-4 my-4">
                <div class="custom-card shadow">
                  <img src="https://picsum.photos/200" class="card-img-top rounded" alt="">
                  <div class="card-body">
                    <h5 class="card-title">{{$element->title}}</h5>
                    <p class="card-text">{{$element->body}}</p>
                    <p class="card-text price">{{$element->price}}</p>
                    <p class="card-footer">Pubblicato il: {{$element->created_at->format('d/m/y')}}</p>
                  </div>
                </div>
              </div> --}}

              <div class="col col-3">
                <div class=" pro">
                    <img src="https://picsum.photos/200" alt="">
                    <div class="des">
                        <span>{{$element->created_at->format('d/m/y')}}</span>
                        <h5>{{$element->title}}</h5>
                        {{-- <a href="#">{{ $announcement->category->name }}</a> --}}
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>${{$element->price}}</h4>
            
            
                    </div>
                    <a href="#"><i class="fa-sharp fa-light fa-eye cart"></i></a>
                    {{-- <a href="{{ route('announcement.show', ['announcement' => $announcement]) }}"><i
                            class="fa-sharp fa-light fa-eye eye"></i></a> --}}
                </div>
            </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
</x-layout>
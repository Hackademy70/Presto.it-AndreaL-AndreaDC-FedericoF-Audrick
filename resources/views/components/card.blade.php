{{-- <div class="col-12 col-md-4 my-4">
  <div class="custom-card shadow">
    <img src="https://picsum.photos/200" class="card-img-top rounded" alt="">
    <div class="card-body">
      <h5 class="card-title">{{$announcement->title}}</h5>
      <p class="card-text">{{$announcement->body}}</p>
      <p class="card-text price">{{$announcement->price}}</p>
      <div class="button-group">
        <a href="{{route('announcement.show', ['announcement'=>$announcement])}}" class="btn btn-primary d-block w-100 mb-2">Visualizza</a>
        <a href="" class="card-link btn btn-success d-block w-100">Categoria: {{$announcement->category->name}}</a>
      </div>
      <p class="card-footer">Pubblicato il: {{$announcement->created_at->format('d/m/y')}}</p>
    </div>
  </div>
</div> --}}



<div class="pro col" >
    <img src="https://picsum.photos/200" alt="">
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
        <h4>${{ $announcement->price }}</h4>


    </div>
    <a href="#"><i class="fa-sharp fa-light fa-eye cart"></i></a>
    <a href="{{ route('announcement.show', ['announcement' => $announcement]) }}"><i
            class="fa-sharp fa-light fa-eye eye"></i></a>
</div>




<div class="col col-3">
    <div class="pro">
        <img src="https://picsum.photos/200" alt="">
        <div class="des">
<<<<<<< HEAD
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
=======
          <h5 class="fs-4">{{ $announcement->title }}</h5>
          <p>{{ $announcement->category->name }}</p class="lead">
          <span>{{ $announcement->created_at->format('d/m/y') }}</span>
          <div class="star">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
          </div>
          <h4>${{ $announcement->price }}</h4>
>>>>>>> afd7e339161bad9de109f6d49f011f54e56023c1


        </div>
        <a href="{{ route('announcement.show', ['announcement' => $announcement]) }}"><i class="fa-solid fa-eye eye text-center"></i></a>
    </div>
</div>



<div class="col col-3">
    <div class="pro">
        <img src="https://picsum.photos/200" alt="">
        <div class="des">
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


        </div>
        <a href="{{ route('announcement.show', ['announcement' => $announcement]) }}"><i class="fa-solid fa-eye eye text-center"></i></a>
    </div>
</div>

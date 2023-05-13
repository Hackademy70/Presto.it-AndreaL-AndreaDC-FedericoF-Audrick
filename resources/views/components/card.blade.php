

<div class="col col-3">
    <div class=" pro">
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
            <h4>{{ $announcement->price }}</h4>


        </div>
        <a href="#"><i class="fa-sharp fa-light fa-eye cart"></i></a>
        <a href="{{ route('announcement.show', ['announcement' => $announcement]) }}"><i
                class="fa-sharp fa-light fa-eye eye"></i></a>
    </div>
</div>

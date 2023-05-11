<div class="col-12 col-md-4 my-4">
  <div class="card shadow" style="width: 18rem;">
    <img src="https://picsum.photos/200" class="card-img-top p-3 rounded" alt="">
    <div class="card-body">
      <h5 class="card-title">{{$announcement->title}}</h5>
      <p class="card-text">{{$announcement->body}}</p>
      <p class="card-text">{{$announcement->price}}</p>
      <a href="{{route('announcement.show', ['announcement'=>$announcement])}}" 
        class="btn btn-primary shadow">visualizza</a>
        <a href="" class="my-2 border-top pt-2 border-dark card-link shadow btn 
        btn-success">categoria: {{$announcement->category->name}}</a>
        <p class="card-footer">publicato il: {{$announcement->created_at->format('d/m/y')}}</p>
      </div>
    </div>
  </div>












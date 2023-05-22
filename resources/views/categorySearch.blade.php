<x-layout>
    {{-- sezione card ricerca per categoria--}}
   <div class="container" style="min-height: 85vh">
    <div class="row">
        <div class="col-12">
          <div class="section-header text-center my-5">
            <h1 class="display-4">
                <span class="search-label">{{__('ui.categorySearchTitle')}}</span>
                <span class="category-name">{{ $category->name }}</span>
            </h1>
            <div class="section-divider"></div>
            </div>
            <div class="row">
                @foreach($category->announcements as $element)
                <div class="col-12 col-lg-3 col-md-6 col-sm-12">
                    <div class="pro">
                        <img src="https://picsum.photos/200" alt="">
                        <div class="des">
                            <span>{{$element->created_at->format('d/m/y')}}</span>
                            <h5>{{$element->title}}</h5>
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
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</x-layout>
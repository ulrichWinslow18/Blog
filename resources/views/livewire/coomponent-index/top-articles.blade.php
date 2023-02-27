    <!-- Featured News Slider Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                <h3 class="m-0">Top articles </h3>
                <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
            </div>
            <div class="owl-carousel owl-carousel-2 carousel-item-4 position-relative">
                @foreach ($articles as $article)
                    @foreach ($tops as $top)
                    @if ($article->id == $top->id)
                    <div class="position-relative overflow-hidden" style="height: 300px;">
                        <img class="img-fluid w-100 h-100" src="{{'storage/'.$article->image1}}" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-1" style="font-size: 13px;">
                                @foreach ($cats as $cat )
                                   @if ($article->id == $cat->id)
                                   <a class="text-white" href=""> {{$cat->nom}} </a>
                                   @endif
                                @endforeach
                                <span class="px-1 text-white">/</span>
                                <a class="text-white" >January 01, 2045</a>
                            </div>
                            <a class="h4 m-0 text-white" wire:click.prevent="saveCount({{$article->id}})" href=""> {{$article->titre}} </a>
                        </div>
                    </div>
                    @endif
                    @endforeach
                @endforeach

            </div>
        </div>
    </div>
    </div>
    <!-- Featured News Slider End -->

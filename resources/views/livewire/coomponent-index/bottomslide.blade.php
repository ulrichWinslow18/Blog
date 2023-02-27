    <!-- Top News Slider Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="owl-carousel owl-carousel-2 carousel-item-3 position-relative">
                @foreach ( $pubs as $pub)
                <div class="d-flex">
                    <img src="{{'storage/'.$pub->image}}" style="width: 80px; height: 80px; object-fit: cover;">
                    <div class="d-flex align-items-center bg-light px-3" style="height: 80px;">
                        <a class="text-secondary font-weight-semi-bold" href=""> {{$pub->contenu}} </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Top News Slider End -->

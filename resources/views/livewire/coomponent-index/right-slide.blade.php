
    <div class="col-lg-8">
        <div class="owl-carousel owl-carousel-2 carousel-item-1 position-relative mb-3 mb-lg-0">    
           @foreach ( $unes as $une)
           <div class="position-relative overflow-hidden" style="height: 435px;">
            <img class="img-fluid h-100" src="{{'storage/'.$une->image1}}" style="object-fit: cover;">
            <div class="overlay">
                <div class="mb-1">
                    @foreach ($cats as $cat )
                       @if ($une->categorie_id == $cat->id)
                           <a class="text-white" href="">{{$cat->nom}}</a>
                       @endif
                    @endforeach
                    <span class="px-2 text-white">/</span>
                    <a class="text-white" href="">January 01, {{$une->titre}}  </a>
                </div>
                <a class="h2 m-0 text-white font-weight-bold" href=""> {{$une->sousTitre}} </a>
            </div>
        </div>
           @endforeach           
        </div>
    </div>   


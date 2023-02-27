
    <div class="col-lg-4">
        <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
            <h3 class="m-0">Categories {{$count}} </h3>
            <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
        </div>
        @foreach ($cats as $cat)
        <div class="position-relative overflow-hidden mb-3" style="height: 80px;">
            <img class="img-fluid w-100 h-100" src="img/cat-500x80-1.jpg" style="object-fit: cover;">
            <a href="" wire:click.prevent="increment" class="overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none">
                {{$cat->nom}}
            </a>
        </div> 
        @endforeach
         
    </div> 


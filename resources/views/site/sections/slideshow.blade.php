<div class="container my-3">
    <div class="bg-primary-1 overflow-hidden" style="border-radius: 30px">
        <div id="carouselExampleDark1" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach($slideShows as $key=> $slideShow)
                    <button type="button" data-bs-target="#carouselExampleDark1"
                            data-bs-slide-to="{{$loop->count-($key+1)}}"
                            @if($loop->first) class="active"
                            aria-current="true" @endif aria-label="Slide {{$loop->count-($key+1)}}"></button>
                @endforeach
            </div>
            <div class="carousel-inner">
                @foreach($slideShows as $slideShow)
                    <div class="carousel-item @if($loop->first) active @endif"
                         data-bs-interval="{{$slideShow->interval}}"
                         style="height: 500px">
                        <img src="{{$slideShow->images->url}}" class="d-block slide-show-img-fix"
                             alt="{{$slideShow->title}}">
                        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                             style="background: rgba(0, 0,0, 0.5);">
                            <div class="carousel-caption">
                                <h1 class="text-white sm-small">{{$slideShow->title}}</h1>
                                <p class="text-center text-light sm-small">{{$slideShow->description}}</p>
                                <a href="{{$slideShow->link}}"
                                   class="btn btn-outline-light btn-sm rounded-pill px-5 py-2">{{$slideShow->link_text}}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark1"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark1"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

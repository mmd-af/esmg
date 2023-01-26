<div id="landingSlideShowDark1" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @foreach($slideShows as $key=> $slideShow)
            <button type="button" data-bs-target="#landingSlideShowDark1" data-bs-slide-to="{{$loop->count-($key+1)}}"
                    @if($loop->iteration ==1 )
                    class="active bg-primary py-2 rounded-circle"
                    @else
                    class="bg-primary py-2 rounded-circle"
                    @endif
                    aria-current="true"
                    aria-label="Slide {{$loop->count-($key+1)}}"
            >
            </button>
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach($slideShows as $slideShow)
            <div class="carousel-item @if($loop->first) active @endif"
                 data-bs-interval="{{$slideShow->interval}}" style="height: 700px;background: rgb(0,0,0);">
                <img src="{{ $slideShow->images->url }}"
                     class="img-d-block w-100"
                     alt="{{$slideShow->title}}"
                     style="opacity: 0.5">
                <div class="carousel-caption text-white">
                    <h1 class="display-3 animateForLanding">{{$slideShow->title}}</h1>
                    <p class="mt-3">{{Str::limit($slideShow->description,450)}}</p>
                    <a href="{{$slideShow->link}}"
                       class="btn btn-primary" style="height: 50px;width: 250px;">{{$slideShow->link_text}}</a>

                </div>
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#landingSlideShowDark1"
            data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#landingSlideShowDark1"
            data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

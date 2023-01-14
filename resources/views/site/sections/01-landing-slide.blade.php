<div id="landingSlideShowCaptions" class="carousel slide" data-bs-ride="carousel">
    <div id="landingSlideShowDark1" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($slideShows as $slideShow)
                <div class="carousel-item @if($loop->first) active @endif"
                     data-bs-interval="{{$slideShow->interval}}" style="height: 500px;background: rgb(0,0,0);">
                    <img src="{{ $slideShow->images->url }}"
                         class="img-d-block w-100"
                         alt="{{$slideShow->title}}"
                         style="opacity: 0.5">
                    <div class="carousel-caption text-white">
                        <div class="row">
                            <div class="col-6">
                                <h1 class="display-3 titleAnime">{{$slideShow->title}}</h1>
                                <p class="mt-3 descriptAnime">{{Str::limit($slideShow->description,450)}}</p></div>
                            <div class="col-6">
                                <a href="{{$slideShow->link}}"
                                   class="btn btn-primary btnAnime" style="height: 50px;width: 250px;">{{$slideShow->link_text}}</a>
                            </div>
                        </div>


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
</div>

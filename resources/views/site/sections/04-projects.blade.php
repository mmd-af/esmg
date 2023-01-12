<div class="container-fluid bg-gradiant-3 py-5">
    <div class="container">
        <h1 class="text-white">پروژه های ما</h1>
        <div class="overflow-hidden" style="border-radius: 30px">
            <div id="carouselExampleDark1" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach($projects as $project)
                        <div class="carousel-item @if($loop->first) active @endif"
                             data-bs-interval="{{$project->interval}}">
                            <div class="row">
                                <div class="col-sm-12 col-md-8" style="background-color: rgba(255,255,255,0.5)">
                                    <img src="{{ asset('upload/projects/' . $project->primary_image) }}"
                                         class="img-fluid w-100 content-zoom"
                                         alt="{{$project->project_name}}">
                                </div>
                                <div class="col-sm-12 col-md-4" style="background-color: rgba(255,255,255,0.5)">
                                    <div class="p-5">
                                        <div class="border border-1 rounded-3 p-5 border-primary-1 content-zoom">
                                            <div class="d-flex justify-content-between">
                                                <p><strong>نام کارفرما: </strong>{{$project->employer_name}}</p>
                                                <img class="img-fluid rounded-circle w-25"
                                                     src="{{ url('/upload/projects/' . $project->logo_image) }}"
                                                     alt="{{$project->employer_name}}"/>
                                            </div>
                                        </div>
                                        <div class="border border-1 rounded-3 p-5 border-primary-1 content-zoom">
                                            <strong>محل
                                                اجرا: </strong>{{$project->project_location}}</div>
                                        <div class="border border-1 rounded-3 p-5 border-primary-1 content-zoom">
                                            <strong>سال
                                                اجرا: </strong>{{$project->year_enforce}}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="text-center text-light sm-small py-3 content-zoom"
                                     style="background-color: rgba(0,0,0,0.5)">
                                    <h1>{{$project->project_name}}</h1>
                                    <p class="px-5">{{Str::limit($project->description,450)}}</p>
                                    <a href="{{$project->link}}"
                                       class="btn btn-outline-light btn-sm rounded-pill px-5 py-2">جزئیات بیشتر</a>
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
</div>

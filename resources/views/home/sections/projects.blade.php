    <div class="container">
        <div class="row">
            <div class="text-center">
                <h2 class="p-4">پروژه ها</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($projects as $project)
                <div class="card card-body bg-primary col-lg-2 col-sm-12 ml-2">
                    <img class="card-img-top d-flex align-items-center" src="{{ asset('upload/projects/' . $project->primary_image) }}" alt="{{ $project->project_name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $project->project_name }}</h5>
                        <li class="list-group-item">نام کارفرما: {{$project->employer_name}}</li>
                        <li class="list-group-item">محل اجرا: {{$project->project_location}}</li>
                        <li class="list-group-item">سال اجرا: {{$project->year_enforce}}</li>
                        <li class="list-group-item">
                            <a href="#" data-toggle="modal" data-target="#productModal-{{$project->id}}">
                                <span class="btn btn-success btn-sm">نمایش</span></a>
                            </li>
                        </div>
                </div>
                @endforeach
                 <div class="d-flex justify-content-center mt-5">
                    {{ $projects->render() }}
                </div>
        </div>
    </div>
    <!-- Modal -->
    @foreach ($projects as $project)
        <div class="modal fade" id="productModal-{{$project->id}}" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="fa fa-window-close fa-xs" aria-hidden="true"></i></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6" style="direction: rtl;">
                                <div class="project-details-content quickview-content">
                                    <h2 class="text-right mb-4">
                                        <img class="card-img-small" src="{{ url('/upload/projects/' . $project->logo_image) }}" alt="" />
                                        {{ $project->project_name }}</h2>
                                        <p class="text-right">
                                            {{ $project->description }}
                                        </p>
                                        <div class="pro-details-meta">
                                            <span>نام کارفرما:</span>
                                            <ul>
                                                <li>{{ $project->employer_name }}</li>
                                            </ul>
                                        </div>
                                        <div class="pro-details-meta">
                                            <span>محل اجرا</span>
                                            <ul>
                                                <li>{{ $project->project_location }}</li>
                                            </ul>
                                        </div>
                                        <div class="pro-details-meta">
                                            <span>سال اجرا</span>
                                            <ul>
                                                <li>{{ $project->year_enforce }}</li>
                                            </ul>
                                        </div>
                                        <div class="pro-details-meta">
                                            <ul>
                                                <span>رضایت مشتری</span>
                                                <li>
                                                    <a href="{{ url('/upload/projects/' . $project->customer_image) }}" data-lightbox="image-1"><img class="card-img-small" src="{{ url('/upload/projects/' . $project->customer_image) }}" alt="" /></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-12 col-xs-12">
                                    <div class="tab-content quickview-big-img">
                                        <div id="pro-primary-{{$project->id}}" class="tab-pane fade show active">
                                            <img src="{{ url('/upload/projects/' . $project->primary_image) }}" width="300px" alt="" />
                                        </div>
                                        @foreach ($project->images as $image)
                                            <div id="pro-{{$image->id}}" class="tab-pane fade">
                                                <img width="300px" src="{{ url('/upload/projects/' . $image->image) }}" alt="" />
                                            </div>
                                        @endforeach
                                    </div>
                                    <!-- Thumbnail Large Image End -->
                                    <!-- Thumbnail Image End -->
                                    <div class="quickview-wrap mt-15">
                                        <div class="quickview-slide-active owl-carousel nav nav-style-2" role="tablist">
                                            <a class="active" data-toggle="tab" href="#pro-primary-{{$project->id}}">
                                                <img class="card-img-small" src="{{ url('/upload/projects/' . $project->primary_image) }}"  width="200px" alt="" />
                                            </a>
                                            @foreach ($project->images as $image)
                                                <a data-toggle="tab" href="#pro-{{$image->id}}">
                                                    <img class="card-img-small" src="{{ url('/upload/projects/' . $image->image) }}" alt="" />
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
        <!-- Modal end -->

@extends('site.layouts.index')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-10">
                @foreach($projects as $project)
                    <div class="row p-2 bg-gradiant-2 border rounded mt-5">
                        <div class="col-md-3 mt-1">
                            <img class="img-fluid img-responsive rounded product-image content-zoom"
                                 src="{{$project->primary_image}}"></div>
                        <div class="col-md-6 mt-1 bg-white rounded rounded-3">
                                <a href="{{route('site.projects.show',$project->slug)}}"><h3 class="text-primary-1 content-zoom">{{$project->project_name}}</h3></a>
                            <div class="d-flex flex-row">
                                <div class="ratings mr-2">
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                    <i class="fa fa-star text-warning"></i>
                                </div>
                                <span>310</span>
                            </div>

                            <div class="content-zoom">
                                <p class="mt-3"><strong class="text-primary">نام کارفرما: </strong>
                                    {{$project->employer_name}}
                                </p>
                                <p><strong class="text-primary">محل اجرا: </strong>
                                    {{$project->project_location}}
                                </p>
                                <p><strong class="text-primary">سال اجرا: </strong>
                                    {{$project->year_enforce}}
                                </p>
                            </div>
                            <p class="text-justify text-truncate para mb-0 content-zoom">
                                {{Str::limit(strip_tags($project->description),50)}}
                            </p>

                        </div>
                        <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                            <div class="text-center">
                                <img class="img-fluid rounded-circle content-zoom w-50"
                                     src="{{  $project->logo_image }}"
                                     alt="{{$project->employer_name}}"/>
                            </div>
                            <div class="d-flex flex-column mt-4">
                                <a href="{{route('site.projects.show',$project->slug)}}" class="btn btn-primary content-zoom"
                                   type="button">اطلاعات بیشتر</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection

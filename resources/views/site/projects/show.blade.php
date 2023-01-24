@extends('site.layouts.index')

@section('content')
    <div class="container-fluid-xxl bg-dark" style="display: block;height: 400px;overflow: hidden;">
        <img class="w-100" src="{{ $project->primary_image }}" alt="Snow"
             style="display: block;overflow: hidden;opacity: 0.5">
        <div class="centered"><h1 class="text-white">{{ $project->project_name }}</h1></div>
    </div>
    <div class="container mt-3 mb-5">
        <div class="row">
            <div class="col-sm-12 col-md-9 bg-white border p-5 rounded-3">
                {!! $project->description !!}
            </div>
            <div class="col-sm-12 col-md-3 bg-white border p-3 rounded-3">
                <div class="text-center">
                    <img class="img-fluid rounded-circle content-zoom w-50"
                         src="{{  $project->logo_image }}"
                         alt="{{$project->employer_name}}"/>
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
                <div class="content-zoom mt-5">
                    <a href="{{route('site.projects.index')}}"
                       class="btn btn-outline-primary btn-sm rounded-pill px-5 py-2">نمایش همه ی پروژه ها</a>
                </div>
            </div>
        </div>
    </div>
@endsection

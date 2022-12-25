@extends('admin.layouts.admin')

@section('title')
    Index Tests
@endsection
@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="d-flex flex-column text-center flex-md-row justify-content-md-between mb-4">
                <h5 class="font-weight-bold mb-3 mb-md-0">لیست پروژه ها ({{ $projects->total() }})</h5>
                <a class="btn btn-sm btn-outline-primary" href="{{ route('projects.create') }}">
                    <i class="fa fa-plus"></i>
                    ایجاد پروژه        </a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped text-center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>نام پروژه</th>
                                <th>نام کارفرما</th>
                                <th>محل اجرا</th>
                                <th>لوگو</th>
                                <th>عملیات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $key => $project)
                                <tr>
                                    <td>
                                        {{ $projects->firstItem() + $key }}
                                    </td>
                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#productModal-{{$project->id}}">
                                            <span class="btn btn-outline-primary">{{ $project->project_name }}</span></a>
                                        </td>
                                        <td>
                                            {{ $project->employer_name }}
                                        </td>
                                        <td>
                                            {{ $project->project_location }}
                                        </td>
                                        <td>
                                            <img src="{{ url('/upload/projects/' . $project->logo_image) }}"
                                            width="50px" height="50px" alt="{{ $project->project_name }}">
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-outline-info mr-3"
                                            href="{{ route('projects.edit', ['project' => $project->id]) }}">ویرایش</a>
                                            <form action="{{{route('projects.destroy', $project->id)}}}" method="post">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit"  onclick="return confirm('آیا مطمئن هستید...؟');" class="btn btn-sm btn-outline-danger mr-3">حذف</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
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

            @endsection

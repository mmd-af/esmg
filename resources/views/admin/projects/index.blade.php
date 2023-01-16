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
                    ایجاد پروژه </a>
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
                        <th>نمایش</th>
                        <th>وضعیت</th>
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
                                <img src="{{$project->logo_image}}"
                                     width="50px" height="50px" alt="{{ $project->project_name }}">
                            </td>
                            <td>
                                <div class="form-check">
                                    <input @if($project->selected ==1 ) checked @endif class="form-check-input"
                                           type="checkbox" value="{{ $project->id }}"
                                           onclick="selectedFunc(this)">
                                </div>
                            </td>
                            <td>
                               <span
                                   class="{{ $project->getRawOriginal('is_active') ? 'text-success' : 'text-danger' }}">
                                        {{ $project->is_active }}
                                </span>
                            </td>
                            <td>
                                <a class="btn btn-sm btn-outline-info mr-3"
                                   href="{{ route('projects.edit', ['project' => $project->id]) }}">ویرایش</a>
                                <form action="{{{route('projects.destroy', $project->id)}}}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" onclick="return confirm('آیا مطمئن هستید...؟');"
                                            class="btn btn-sm btn-outline-danger mr-3">حذف
                                    </button>
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
    @foreach ($projects as $project)
        <div class="modal fade" id="productModal-{{$project->id}}" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-xl" role="document">
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
                                    <div class="text-right mb-4">
                                        <img class="card-img-small"
                                             src="{{ $project->logo_image }}" alt=""/>
                                        <h2>{{ $project->project_name }}</h2>
                                    </div>
                                    <div class="text-right m-5">
                                        <div class="alert alert-warning small">
                                            در اینجا محتوای پروژه به صورت ساده شده نمایش میدهد.
                                        </div>
                                        {!! strip_tags($project->description) !!}
                                    </div>
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
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-12 col-xs-12">
                                <div class="tab-content quickview-big-img">
                                    <div id="pro-primary-{{$project->id}}" class="tab-pane fade show active">
                                        <img src="{{ $project->primary_image }}"
                                             width="300px" alt=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endforeach
@endsection

@section('script')
    <script>
        function selectedFunc(e) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'post',
                url: "{{ route('admin.projects.ajax.setSelected') }}",
                data: {
                    'id': e.value
                },
                success: function (response) {
                    swal({
                        title: "اعمال شد",
                        icon: "success",
                    });
                }
            });

        }
    </script>
@endsection

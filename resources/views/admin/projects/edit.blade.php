@extends('admin.layouts.admin')

@section('title')
    Edit Projects
@endsection

@section('script')
    <script>
        $('#images').change(function () {
            //get the file name
            var fileName = $(this).val();
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(fileName);
        });

        $('#logoimage').change(function () {
            //get the file name
            var fileName = $(this).val();
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(fileName);
        });

        $('#customerimage').change(function () {
            //get the file name
            var fileName = $(this).val();
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(fileName);
        });


    </script>
@endsection
@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="mb-4 text-center text-md-right">
                <h5 class="font-weight-bold">ویرایش پروژه : {{ $project->title }}</h5>
            </div>
            @include('admin.sections.errors')
            <form action="{{ route('projects.update', ['project' => $project->id]) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="project_name">نام پروژه:</label>
                        <input class="form-control" id="project_name" name="project_name" type="text"
                               value="{{ $project->project_name }}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="project_name">نام انگلیسی:</label>
                        <input class="form-control" id="project_name" name="project_name" type="text"
                               value="{{ $project->slug }}" disabled>
                    </div>
                </div>
                <div class="form-row py-2" style="background-color: rgba(0,0,0,0.1)">
                    <div class="form-group col-md-3">
                        <label for="parent_id">نوع دسته</label>
                        <select class="form-control" id="category"
                                name="category">
                            @foreach($project->categories as $category)
                                <option value="{{$category->id}}" selected>{{$category->title}}</option>
                            @endforeach
                            <option value="">------------------</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">
                                    {{$category->title}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="interval">زمان نمایش:(به میلی ثانیه)</label>
                        <input class="form-control" id="interval" name="interval" type="number"
                               value="{{ $project->interval }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="employer_name">نام کارفرما:</label>
                        <input class="form-control" id="employer_name" name="employer_name" type="text"
                               value="{{ $project->employer_name }}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="project_location">محل اجرا:</label>
                        <input class="form-control" id="project_location" name="project_location" type="text"
                               value="{{ $project->project_location }}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="year_enforce">سال اجرا:</label>
                        <input class="form-control" id="year_enforce" name="year_enforce" type="text"
                               value="{{ $project->year_enforce }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12" id=showdesc>
                        <label for="description">توضیحات:</label>
                        <textarea class="form-control" id="editor"
                                  name="description">{{ $project->description }}</textarea>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="is_active">وضعیت:</label>
                        <select class="form-control" id="is_active" name="is_active">
                            <option value="1" {{ $project->getRawOriginal('is_active') ? 'selected' : '' }}>فعال
                            </option>
                            <option value="0" {{ $project->getRawOriginal('is_active') ? '' : 'selected' }} >
                                غیرفعال
                            </option>
                        </select>
                    </div>
                </div>
                <button class="btn btn-outline-primary mt-5" type="submit">ویرایش</button>
                <a href="{{ route('projects.index') }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
            </form>
        </div>
        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="mb-4 text-center text-md-right">
                <div class="row">
                    <div class="col-12 col-md-12 mb-5">
                        <h5>تصویر اصلی : </h5>
                    </div>
                    <div class="col-12 col-md-3 mb-5">
                        <div class="card">
                            <img class="card-img-top"
                                 src="{{ url('/upload/projects/' . $project->primary_image) }}"
                                 alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="mb-4 text-center text-md-right">
                <div class="row">
                    <div class="col-12 col-md-12 mb-5">
                        <h5>تصاویر : </h5>
                    </div>
                    @foreach ($project->images as $image)
                        <div class="col-md-3">
                            <div class="card">
                                <img class="card-img-top" src="{{ url('/upload/projects/' . $image->image) }}"
                                     alt="">
                                <div class="card-body text-center">
                                    <form action="{{ route('projects.images.destroy', ['project' => $project->id]) }}"
                                          method="post">
                                        @method('DELETE')
                                        @csrf
                                        <input type="hidden" name="image_id" value="{{ $image->id }}">
                                        <button class="btn btn-danger btn-sm mb-3" type="submit">حذف</button>
                                    </form>
                                    <form
                                        action="{{ route('projects.images.set_primary', ['project' => $project->id]) }}"
                                        method="post">
                                        @method('PUT')
                                        @csrf
                                        <input type="hidden" name="image_id" value="{{ $image->id }}">
                                        <button class="btn btn-primary btn-sm mb-3" type="submit">انتخاب به عنوان تصویر
                                            اصلی
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <hr>
        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <form action="{{ route('projects.images.add', ['project' => $project->id]) }}" method="POST"
                  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="images"> انتخاب تصاویر </label>
                        <div class="custom-file">
                            <input type="file" name="images[]" multiple class="custom-file-input" id="images">
                            <label class="custom-file-label" for="images"> انتخاب فایل ها </label>
                        </div>
                    </div>
                </div>

                <button class="btn btn-outline-primary mt-5" type="submit">اضافه کردن</button>
                <a href="{{ route('projects.index') }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
            </form>
        </div>


        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">

            <form action="{{ route('projects.images.logo', ['project' => $project->id]) }}" method="POST"
                  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="logoimage">تغییر لوگو</label>
                        <div class="custom-file">
                            <input type="file" name="logo_image" class="custom-file-input" id="logoimage">
                            <label class="custom-file-label" for="images"> انتخاب فایل ها </label>
                        </div>
                    </div>
                </div>

                <button class="btn btn-outline-primary mt-5" type="submit">تغییر</button>
                <a href="{{ route('projects.index') }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
            </form>
        </div>


        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">

            <form action="{{ route('projects.images.customer', ['project' => $project->id]) }}" method="POST"
                  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="customerimage">تغییر رضایت مشتری</label>
                        <div class="custom-file">
                            <input type="file" name="customer_image" class="custom-file-input" id="customerimage">
                            <label class="custom-file-label" for="images"> انتخاب فایل ها </label>
                        </div>
                    </div>
                </div>

                <button class="btn btn-outline-primary mt-5" type="submit">تغییر</button>
                <a href="{{ route('projects.index') }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
            </form>
        </div>
    </div>
@endsection

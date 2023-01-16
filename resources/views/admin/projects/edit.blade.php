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
                <div class="form-row py-2">
                    <div class="form-group col-md-4 bg-secondary p-3">
                        <a id="logo" data-input="thumbnail" data-preview="holder" class="btn btn-primary"> تغییر
                            لوگو</a>
                        <input id="thumbnail" data-preview="holder" name="logo_image" class="form-control" type="text"
                               name="filepath"
                               value="{{$project->logo_image}}">
                        <div id="holder" style="margin-top:10px;max-height:100px;"></div>
                        <img class="img-fluid" src="{{$project->logo_image}}" style="margin-top:10px;max-height:100px;"
                             alt="">
                    </div>
                    <div class="form-group col-md-4 bg-secondary p-3">
                        <a id="primaryImage" data-input="thumbnail1" data-preview="holder1" class="btn btn-primary">تغییر
                            عکس
                            اصلی</a>
                        <input id="thumbnail1" name="primary_image" class="form-control" type="text" name="filepath1"
                               value="{{$project->primary_image}}">
                        <div id="holder1" style="margin-top:10px;max-height:100px;"></div>
                        <img class="img-fluid" src="{{$project->primary_image}}" style="margin-top:10px;max-height:100px;"
                             alt="">
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
    </div>
@endsection

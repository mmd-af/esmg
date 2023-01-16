@extends('admin.layouts.admin')

@section('title')
    Create Tests
@endsection

@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="mb-4 text-center text-md-right">
                <h5 class="font-weight-bold">ایجاد پروژه</h5>
            </div>
            @include('admin.sections.errors')
            <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row py-2">
                    <div class="form-group col-md-3">
                        <label for="project_name">نام پروژه:</label>
                        <input class="form-control" id="project_name" name="project_name" type="text"
                               value="{{ old('project_name') }}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="slug">نام انگلیسی:</label>
                        <input class="form-control" id="slug" name="slug" type="text" value="{{ old('slug') }}">
                    </div>
                </div>
                <div class="form-row py-2" style="background-color: rgba(0,0,0,0.1)">
                    <div class="form-group col-md-3">
                        <label for="parent_id">نوع دسته</label>
                        <select class="form-control category-select" id="category" name="category">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}" selected>{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="interval">زمان نمایش:(به میلی ثانیه)</label>
                        <input class="form-control" id="interval" name="interval" type="number"
                               value="{{ old('interval') }}">
                    </div>
                </div>
                <div class="form-row py-2">
                    <div class="form-group col-md-3">
                        <label for="employer_name">نام کارفرما:</label>
                        <input class="form-control" id="employer_name" name="employer_name" type="text"
                               value="{{ old('employer_name') }}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="project_location">محل اجرا:</label>
                        <input class="form-control" id="project_location" name="project_location" type="text"
                               value="{{ old('project_location') }}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="year_enforce">سال اجرا:</label>
                        <input class="form-control" id="year_enforce" name="year_enforce" type="text"
                               value="{{ old('year_enforce') }}">
                    </div>
                </div>
                <div class="form-row py-2">
                    <div class="form-group col-md-4 bg-secondary p-3">
                        <a id="logo" data-input="thumbnail" data-preview="holder" class="btn btn-primary"> انتخاب
                            لوگو</a>
                        <input id="thumbnail" name="logo_image" class="form-control" type="text">
                        <div id="holder" style="margin-top:10px;max-height:100px;"></div>
                    </div>
                    <div class="form-group col-md-4 bg-secondary p-3">
                        <a id="primaryImage" data-input="thumbnail1" data-preview="holder1" class="btn btn-primary">عکس
                            اصلی</a>
                        <input id="thumbnail1" name="primary_image" class="form-control" type="text">
                        <div id="holder1" style="margin-top:10px;max-height:100px;"></div>
                    </div>
                </div>
                <div class="form-row py-2">
                    <div class="form-group col-md-12" id=showdesc>
                        <label for="description">توضیحات:</label>
                        <textarea class="form-control" id="editor"
                                  name="description">{{ old('description') }}</textarea>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="is_active">وضعیت</label>
                        <select class="form-control" id="is_active" name="is_active">
                            <option value="1" selected>فعال</option>
                            <option value="0">غیرفعال</option>
                        </select>
                    </div>
                </div>
                <button class="btn btn-outline-primary mt-5" type="submit">ثبت</button>
                <a href="{{ route('projects.index') }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
            </form>
        </div>
    </div>
@endsection

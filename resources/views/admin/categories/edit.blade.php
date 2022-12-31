@extends('admin.layouts.admin')

@section('title')
    edit categories
@endsection

@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="mb-4 text-center text-md-right">
                <h5 class="font-weight-bold">ویرایش: {{ $category->title }}</h5>
            </div>
            <hr>
            @include('admin.sections.errors')
            <form action="{{ route('admin.categories.update' , ['category' => $category->id])}}"
                  method="POST">
                @csrf
                @method('put')
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="title">نام دسته بندی:</label>
                        <input class="form-control" id="title" name="title" type="text"
                               value="{{$category->title}}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="slug">نام انگلیسی:</label>
                        <input class="form-control" id="slug" name="slug" type="text"
                               value="{{ $category->slug }}" disabled>
                    </div>
                    <div class="form-group col-md-12 mt-3">
                        <div class="form-group col-md-6">
                            <label for="image">تصویر:</label>
                            <div class="input-group">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button" id="button-image">انتخاب
                                    </button>
                                </div>
                                <input type="text" id="image" class="form-control" name="url"
                                       aria-label="Image" aria-describedby="button-image"
                                       value="{{ $category->images->url }}">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <img class="img-fluid" src="{{ $category->images->url }}" alt="">
                        </div>
                    </div>
                    <div class="form-group col-md-12 mt-3">
                        <label for="type" class="pr-3">انتخاب دسته:</label>
                        <div class="form-group col-md-3" id="select_category">
                            <div class="py-3 card shadow">
                                <div class="justify-content-center p-3">
                                    <label for="course">دوره های آموزشی</label>
                                    <input id="course" class="category_type" type="radio" value="1"
                                           name="cat_type"
                                           @if($category->getRawOriginal('type') == \App\Enums\ECategoryType::PROJECT) checked @endif>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p>زیردسته: </p>
                    <input type="hidden" name="parent_id" value="{{$category->parent_id}}">
                    <b>
                        @if($category->parent_id<>0)
                            {{ $category->parent->title }}
                        @endif
                    </b>
                </div>
                <div class="form-row">
                    <div class="col-sm-12 col-lg-8">
                        <div class="form-group col-md-12">
                            <label for="editor">توضیحات:</label>
                            <textarea class="form-control" id="editor"
                                      name="description">{{ $category->description }}</textarea>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4">
                        <div class="form-group col-md-12">
                            <label for="is_active">وضعیت:</label>
                            <select class="form-control" id="is_active" name="is_active">
                                <option value="1" {{ $category->getRawOriginal('is_active') ? 'selected' : '' }}>فعال
                                </option>
                                <option value="0" {{ $category->getRawOriginal('is_active') ? '' : 'selected' }} >
                                    غیرفعال
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <button class="btn btn-success mt-5" type="submit">ویرایش</button>
                <a href="{{ route('admin.categories.index') }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
            </form>
        </div>
    </div>

@endsection

@section('script')
    @include('admin.sections.script.wordCount')
@endsection

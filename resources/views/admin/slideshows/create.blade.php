@extends('admin.layouts.admin')

@section('title')
    create slideshows
@endsection

@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="mb-4 text-center text-md-right">
                <h5 class="font-weight-bold">ایجاد اسلایدشو</h5>
            </div>
            <hr>
            @include('admin.sections.errors')
            <form action="{{ route('admin.slideshows.store') }}" method="POST">
                @csrf
                <div class="form-row">
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
                                       value="{{ old('url') }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="title">عنوان:</label>
                        <input class="form-control" id="title" name="title" type="text"
                               value="{{ old('title') }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="slug">نام انگلیسی:</label>
                        <input class="form-control" id="slug" name="slug" type="text" value="{{ old('slug') }}">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="description">توضیحات:</label>
                        <textarea class="form-control" id="word" maxlength="300" id="description"
                                  name="description" rows="5">{!! old('description') !!}</textarea>
                        <div id="the-count">
                            <span id="current">0</span>
                            <span id="maximum">/300</span>
                        </div>
                        <p>تعداد کلمات:
                            <span id="show">0</span>
                        </p>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="interval">زمان نمایش:(به میلی ثانیه)</label>
                        <input class="form-control" id="interval" name="interval" type="number"
                               value="{{ old('interval') }}">
                    </div>
                    <div class="form-group col-md-12">
                        <div class="form-group col-md-4">
                            <label for="link_text">متن دکمه:</label>
                            <input class="form-control" id="link_text" name="link_text" type="text"
                                   value="{{ old('link_text') }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="link">لینک دکمه:</label>
                            <input class="form-control" id="link" name="link" type="text" value="{{ old('link') }}">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="order">ترتیب:</label>
                            <input class="form-control" id="order" name="order" type="text" value="{{ old('order') }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="is_active">وضعیت</label>
                            <select class="form-control" id="is_active" name="is_active">
                                <option value="1" selected>فعال</option>
                                <option value="0">غیرفعال</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <button class="btn btn-outline-primary mt-5" type="submit">ثبت</button>
                    <a href="{{ route('admin.slideshows.index') }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('script')
    @include('admin.sections.script.wordCount')
@endsection

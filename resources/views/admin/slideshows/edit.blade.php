@extends('admin.layouts.admin')

@section('title')
    edit slideshows
@endsection

@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="mb-4 text-center text-md-right">
                <h5 class="font-weight-bold">ویرایش اسلاید: {{ $slideShow->title }}</h5>
            </div>
            <hr>
            @include('admin.sections.errors')
            <form action="{{ route('admin.slideshows.update' , ['slideshow' => $slideShow->id]) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-row">
                    <div class="form-group col-md-12 mt-3">
                        <div class="form-group col-md-4 bg-secondary p-3">
                            <a id="logo" data-input="thumbnail" data-preview="holder" class="btn btn-primary"> تغییر
                                تصویر</a>
                            <input id="thumbnail" data-preview="holder" name="url" class="form-control" type="text"
                                   value="{{$slideShow->images->url}}">
                            <div id="holder" style="margin-top:10px;max-height:100px;"></div>
                            <img class="img-fluid" src="{{$slideShow->images->url}}"
                                 style="margin-top:10px;max-height:100px;"
                                 alt="">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="title">عنوان:</label>
                        <input class="form-control" id="title" name="title" type="text"
                               value="{{ $slideShow->title }}">
                    </div>
                    <div class="form-group col-md-12">
                        <label>توضیحات:</label>
                        <textarea class="form-control" id="word" maxlength="300"
                                  name="description" rows="5">{{ $slideShow->description }}</textarea>
                        <div id="the-count">
                            <span id="current">0</span>
                            <span id="maximum">/300</span>
                        </div>
                        <p>تعداد کلمات:
                            <span id="show">0</span>
                        </p>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="interval">متن زمان نمایش:(به میلی ثانیه)</label>
                        <input class="form-control" id="interval" name="interval" type="number"
                               value="{{ $slideShow->interval }}">
                    </div>
                    <div class="form-group col-md-12">
                        <div class="form-group col-md-4">
                            <label for="link_text">متن دکمه:</label>
                            <input class="form-control" id="link_text" name="link_text" type="text"
                                   value="{{ $slideShow->link_text }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="link">لینک دکمه:</label>
                            <input class="form-control" id="link" name="link" type="text"
                                   value="{{ $slideShow->link }}">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="order">ترتیب:</label>
                            <input class="form-control" id="order" name="order" type="text"
                                   value="{{ $slideShow->order }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="is_active">وضعیت:</label>
                            <select class="form-control" id="is_active" name="is_active">
                                <option value="1" {{ $slideShow->getRawOriginal('is_active') ? 'selected' : '' }}>فعال
                                </option>
                                <option value="0" {{ $slideShow->getRawOriginal('is_active') ? '' : 'selected' }} >
                                    غیرفعال
                                </option>
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

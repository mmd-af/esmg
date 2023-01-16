@extends('admin.layouts.admin')

@section('title')
    edit customers
@endsection

@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="mb-4 text-center text-md-right">
                <h5 class="font-weight-bold">ویرایش اسلاید: {{ $customer->title }}</h5>
            </div>
            <hr>
            @include('admin.sections.errors')
            <form action="{{ route('admin.customers.update' , ['customer' => $customer->id]) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-row">
                    <div class="form-group col-md-12 mt-3">
                        <div class="form-group col-md-4 bg-secondary p-3">
                            <a id="logo" data-input="thumbnail" data-preview="holder" class="btn btn-primary"> تغییر
                                لوگو</a>
                            <input id="thumbnail" data-preview="holder" name="url" class="form-control" type="text"
                                   value="{{$customer->images->url}}">
                            <div id="holder" style="margin-top:10px;max-height:100px;"></div>
                            <img class="img-fluid" src="{{$customer->images->url}}" style="margin-top:10px;max-height:100px;"
                                 alt="">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="title">نام:</label>
                        <input class="form-control" id="title" name="title" type="text"
                               value="{{ $customer->title }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="is_active">وضعیت:</label>
                        <select class="form-control" id="is_active" name="is_active">
                            <option value="1" {{ $customer->getRawOriginal('is_active') ? 'selected' : '' }}>فعال
                            </option>
                            <option value="0" {{ $customer->getRawOriginal('is_active') ? '' : 'selected' }} >
                                غیرفعال
                            </option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <button class="btn btn-outline-primary mt-5" type="submit">ثبت</button>
                    <a href="{{ route('admin.customers.index') }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('script')
    @include('admin.sections.script.wordCount')
@endsection

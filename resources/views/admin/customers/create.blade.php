@extends('admin.layouts.admin')

@section('title')
    create customers
@endsection

@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="mb-4 text-center text-md-right">
                <h5 class="font-weight-bold">ایجاد مشتری</h5>
            </div>
            <hr>
            @include('admin.sections.errors')
            <form action="{{ route('admin.customers.store') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-3 mt-3">
                        <div class="form-group bg-secondary p-3">
                            <a id="logo" data-input="thumbnail" data-preview="holder" class="btn btn-primary"> انتخاب
                                لوگو</a>
                            <input id="thumbnail" name="url" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-group col-md-3 mt-3">
                        <div id="holder"></div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="title">نام::</label>
                        <input class="form-control" id="title" name="title" type="text"
                               value="{{ old('title') }}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="is_active">وضعیت</label>
                        <select class="form-control" id="is_active" name="is_active">
                            <option value="1" selected>فعال</option>
                            <option value="0">غیرفعال</option>
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

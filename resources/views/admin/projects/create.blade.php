@extends('admin.layouts.admin')

@section('title')
    Create Tests
@endsection

@section('script')
    <script>

    $('#logo_image').change(function() {
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
    });

    $('#primary_image').change(function() {
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
    });

    $('#customer_image').change(function() {
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
    });

    $('#images').change(function() {
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
                <h5 class="font-weight-bold">ایجاد پروژه</h5>
            </div>
            <hr>

            @include('admin.sections.errors')

            <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="project_name">نام پروژه:</label>
                        <input class="form-control" id="project_name" name="project_name" type="text" value="{{ old('project_name') }}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="employer_name">نام کارفرما:</label>
                        <input class="form-control" id="employer_name" name="employer_name" type="text" value="{{ old('employer_name') }}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="project_location">محل اجرا:</label>
                        <input class="form-control" id="project_location" name="project_location" type="text" value="{{ old('project_location') }}">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="logo_image">لوگو:</label>
                        <div class="custom-file">
                            <input type="file" name="logo_image" class="custom-file-input" id="logo_image">
                            <label class="custom-file-label" for="logo_image"> انتخاب فایل </label>
                        </div>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="primary_image">عکس اصلی:</label>
                        <div class="custom-file">
                            <input type="file" name="primary_image" class="custom-file-input" id="primary_image">
                            <label class="custom-file-label" for="primary_image"> انتخاب فایل </label>
                        </div>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="customer_image">رضایت مشتری:</label>
                        <div class="custom-file">
                            <input type="file" name="customer_image" class="custom-file-input" id="customer_image">
                            <label class="custom-file-label" for="customer_image"> انتخاب فایل </label>
                        </div>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="year_enforce">سال اجرا:</label>
                        <input class="form-control" id="year_enforce" name="year_enforce" type="text" value="{{ old('year_enforce') }}">
                    </div>

                    <div class="form-group col-md-12" id=showdesc>
                        <label for="description">توضیحات:</label>
                        <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
                    </div>
<hr>
<div class="form-group col-md-3">
    <label for="images"> انتخاب تصاویر </label>
    <div class="custom-file">
        <input type="file" name="images[]" multiple class="custom-file-input" id="images">
        <label class="custom-file-label" for="images"> انتخاب فایل ها </label>
    </div>
</div>


                </div>
                <button class="btn btn-outline-primary mt-5" type="submit">ثبت</button>
                <a href="{{ route('projects.index') }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
            </form>
        </div>

    </div>

@endsection

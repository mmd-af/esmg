@extends('admin.layouts.admin')

@section('title')
    create category
@endsection

@section('content')

    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 p-4">
            <div class="card shadow-lg mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between ">
                    <h5 class="mb-3 mb-md-0">ایجاد دسته بندی</h5>
                </div>
                <div>
                    @include('admin.sections.errors')
                    <form action="{{ route('admin.categories.store') }}" method="POST">
                        @csrf
                        <div class="form-row p-4">
                            <div class="form-group col-md-12 mt-3">
                                <div class="form-group col-md-3">
                                    <label for="title">نام دسته بندی:</label>
                                    <input class="form-control" id="title" name="title" type="text"
                                           onchange="metaTitle(event)" value="{{ old('title') }}">
                                </div>
                            </div>
                            <div class="form-group col-md-12 mt-3">
                                <div class="form-group col-md-3 mt">
                                    <label for="slug">نام دسته بندی به انگلیسی:</label>
                                    <input class="form-control" id="slug" name="slug" type="text"
                                           value="{{ old('slug') }}">
                                </div>
                            </div>
                            <div class="form-group col-md-12 mt-3">
                                <div class="form-group col-md-4 bg-secondary p-3">
                                    <a id="logo" data-input="thumbnail" data-preview="holder" class="btn btn-primary"> انتخاب
                                        تصویر</a>
                                    <input id="thumbnail" name="url" class="form-control" type="text">
                                    <div id="holder" style="margin-top:10px;max-height:100px;"></div>
                                </div>
                            </div>
                            <div class="form-group col-md-12 mt-3">
                                <label for="type" class="pr-3">انتخاب دسته:</label>
                                <div class="form-group col-md-3" id="select_category">
                                    <div class="py-3 card shadow">
                                        <div class="justify-content-center p-3">
                                            <label for="course">پروژه ها</label>
                                            <input id="course" class="category_type" type="radio" value="1"
                                                   name="cat_type">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12 mt-3">
                                <div class="form-group col-md-3">
                                    <label for="parent_id">نوع دسته</label>
                                    <input type="hidden" name="parent_id" value="0">
                                    <select class="form-control category-select" id="parent_id"                                            disabled>
                                        <option value="0" selected>دسته ی مادر</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-md-12 mt-5">
                                <label for="editor">توضیحات:</label>
                                <textarea class="form-control" id="editor"
                                          name="description">{!! old('description') !!}</textarea>
                            </div>
                            <div class="form-group col-md-12 mt-3">
                                <div class="form-group col-md-3">
                                    <label for="is_active">وضعیت</label>
                                    <select class="form-control" id="is_active" name="is_active">
                                        <option value="1" selected>فعال</option>
                                        <option value="0">غیرفعال</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12 mt-3 mr-3">
                            <button class="btn btn-success px-4" type="submit">ثبت</button>
                            <a href="{{ route('admin.categories.index') }}"
                               class="btn btn-outline-dark mr-3">بازگشت</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    @include('admin.sections.script.wordCount')
    <script>
        function metaTitle(event) {
            let metaTitle = document.getElementById('meta_title');
            metaTitle.value = event.target.value;
            // console.log(event.target.value);

        }
    </script>
@endsection

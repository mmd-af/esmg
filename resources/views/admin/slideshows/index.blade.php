@extends('admin.layouts.admin')

@section('title')
    index slideShows
@endsection

@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="d-flex flex-column text-center flex-md-row justify-content-md-between mb-4">
                <h5 class="font-weight-bold mb-3 mb-md-0">لیست اسلاید ها: ({{ $slideShows->total() }})</h5>
                <a class="btn btn-sm btn-outline-primary" href="{{ route('admin.slideshows.create') }}">
                    <i class="fa fa-plus"></i>
                    ایجاد اسلایدشو
                </a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>عنوان</th>
                        <th>نام انگلیسی</th>
                        <th>ترتیب</th>
                        <th>وضعیت</th>
                        <th>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($slideShows as $key => $slideshow)
                        <tr>
                            <th>
                                {{ $slideShows->firstItem() + $key }}
                            </th>
                            <th>
                                {{ $slideshow->title }}
                            </th>
                            <th>
                                {{ $slideshow->slug }}
                            </th>
                            <th>
                                {{ $slideshow->order }}
                            </th>
                            <th>
                                <span
                                    class="{{ $slideshow->getRawOriginal('is_active') ? 'text-success' : 'text-danger' }}">
                                        {{ $slideshow->is_active }}
                                </span>
                            </th>
                            <th>
                                <a class="btn btn-sm btn-outline-info mr-3"
                                   href="{{ route('admin.slideshows.edit', ['slideshow' => $slideshow->id]) }}">ویرایش</a>
                                <form method="post" action="{{ route('admin.slideshows.destroy', ['slideshow' => $slideshow->id]) }}">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-outline-danger show_confirm mr-3" type="submit">حذف
                                    </button>
                                </form>
                            </th>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center mt-5">
                {{ $slideShows->render() }}
            </div>
        </div>
    </div>
@endsection

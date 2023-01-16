@extends('admin.layouts.admin')

@section('title')
    index Customers
@endsection

@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="d-flex flex-column text-center flex-md-row justify-content-md-between mb-4">
                <h5 class="font-weight-bold mb-3 mb-md-0">لیست مشتریان: ({{ $customers->total() }})</h5>
                <a class="btn btn-sm btn-outline-primary" href="{{ route('admin.customers.create') }}">
                    <i class="fa fa-plus"></i>
                    ایجاد مشتری
                </a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>عنوان</th>
                        <th>لوگو</th>
                        <th>وضعیت</th>
                        <th>عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($customers as $key => $customer)
                        <tr>
                            <th>
                                {{ $customers->firstItem() + $key }}
                            </th>
                            <th>
                                {{ $customer->title }}
                            </th>
                            <th>
                                <img class="img-fluid w-25" src="{{ $customer->images->url }}" alt="">
                            </th>
                            <th>
                                <span
                                    class="{{ $customer->getRawOriginal('is_active') ? 'text-success' : 'text-danger' }}">
                                        {{ $customer->is_active }}
                                </span>
                            </th>
                            <th>
                                <a class="btn btn-sm btn-outline-info mr-3"
                                   href="{{ route('admin.customers.edit', ['customer' => $customer->id]) }}">ویرایش</a>
                                <form method="post" action="{{ route('admin.customers.destroy', ['customer' => $customer->id]) }}">
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
                {{ $customers->render() }}
            </div>
        </div>
    </div>
@endsection

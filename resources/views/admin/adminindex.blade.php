@extends('admin.layouts.admin')

@section('title')
    dashboard - All Tests
@endsection

@section('content')
    {{-- <div class="row">
        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="d-flex flex-column text-center flex-md-row justify-content-md-between mb-4">
                <h5 class="font-weight-bold mb-3 mb-md-0">لیست آزمون ها ({{ $indextests->total() }})</h5>
            </div>


            <div class="table-responsive">
                <table>
                    <tbody>
                        <tr class="row align-items-start">
                            <div class="col-md-3">

                                @foreach ($indextests as $indextest)
                                    <td>
                                        <div class="card p-2" style="width: 18rem;">
                                            <img class="card-img-top p-2" src="{{ url('/upload/testsicon/' . $indextest->image) }}" alt="{{ $indextest->title }}">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $indextest->title }}</h5>
                                                <li class="list-group-item">هزینه ی آزمون: @if ($indextest->testcost==0 or $indextest->testcost==null)
                                                    رایگان
                                                @else
                                                    {{number_format( $indextest->testcost )}} تومان
                                                @endif</li>

            <form action="{{ route('take', ['indextest' => $indextest->id]) }}" method="post">
                @csrf

<li class="list-group-item">
<input type="text" name="coupon" value="">کدتخفیف:</li>
<li class="list-group-item">
    <a href="#" data-toggle="modal" data-target="#productModal-{{$indextest->id}}">
    <span class="btn btn-success btn-sm">توضیحات</span></a>
    <button type="submit" class="btn btn-primary btn-sm">شرکت در آزمون</button></li>
    </form>
                                                    </div>
                                                </div>
                                            </td>
                                        @endforeach
                                    </div>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center mt-5">
                        {{ $indextests->render() }}
                    </div>
                </div>
            </div>

            @foreach ($indextests as $indextest)
                <div class="modal fade" id="productModal-{{$indextest->id}}" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">x</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-7 col-sm-12 col-xs-12" style="direction: rtl;">
                                        <div class="product-details-content quickview-content">
                                            <h2 class="text-right mb-4">{{ $indextest->title }}</h2>
                                            <p class="text-right">
                                                {{ $indextest->description }}
                                            </p>
                                            <div class="pro-details-rating-wrap">
                                                <li class="list-group-item">مدت زمان آزمون: @if ($indextest->longtime==0 or $indextest->longtime==null)ندارد
                                                @else
                                                    {{ gmdate("i:s", $indextest->longtime) }} دقیقه
                                                @endif</li>
                                                <li class="list-group-item">هزینه ی آزمون: <br> @if ($indextest->testcost==0 or $indextest->testcost==null)
                                                    رایگان
                                                @else
                                                    {{number_format( $indextest->testcost )}} تومان
                                                @endif</li>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-5 col-sm-12 col-xs-12">
                                        <div class="tab-content quickview-big-img">
                                            <div id="pro-primary-{{$indextest->id}}" class="tab-pane fade show active">
                                                <img class="card-img-top" src="{{ url('/upload/testsicon/' . $indextest->image) }}" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

 --}}

        @endsection

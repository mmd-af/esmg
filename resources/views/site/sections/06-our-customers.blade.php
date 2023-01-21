<div class="container-fluid py-3 bg-white reveal-content">
    <div class="container overflow-hidden">
        <h1 class="text-primary-1 animateForLanding">مشتریان ما:</h1>
        <div class="row">
            @foreach ($customers as $customer)
                <div class="col-xs-6 col-md-4 col-lg-3 text-center p-5 content-zoom">
                    <img class="img-fluid border border-3 border-primary-1"
                         style="width: 100px;height: 100px;border-radius: 50%"
                         src="{{ $customer->images->url }}"
                         alt="{{ $customer->title }}">
                    <h6>{{$customer->title}}</h6>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ارم صنعت موج گستر - دانش بنیان</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicons/favicon.ico')}}">
    <meta name="theme-color" content="#ccffff">
    <link href="{{asset('css/site.css')}}" rel="stylesheet"/>
</head>
<body>
<main class="main" id="top">
    @include('site.sections.navbar')
    @yield('content')
    <section class="py-0 py-xxl-6" id="help">
        <div class="bg-holder"
             style="background-image:url(img/gallery/footer-bg.png);background-position:center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
            <div class="row min-vh-75 min-vh-xl-50 pt-10 text-white">
                <div class="col-6 col-md-4 col-xl-4 mb-3">
                    <div class="text-white p-4">
                        <i class="fas fa-map-marker-alt fa-3x"></i>
                    </div>

                    <ul class="list-unstyled mb-md-4 mb-lg-0">
                        <li class="lh-lg"><p>شیراز - شهرک آرین - خ فناوری - پارک علم و فناوری فارس - ساختمان تخت جمشید -
                                واحد 3010</p>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-md-4 col-xl-4 mb-3">
                    <div class="text-white p-4">
                        <i class="fas fa-address-book fa-3x"></i>
                    </div>

                    <ul class="list-unstyled mb-md-4 mb-lg-0">
                        <li class="lh-lg"><i class="fas fa-envelope"></i> info@esmg.co.ir</li>
                        <li class="lh-lg"><i class="fas fa-phone-square"></i> 09376925054</li>
                        <li class="lh-lg"><i class="fas fa-phone-square"></i> 071-36240650</li>
                    </ul>
                </div>
            </div>
            <hr/>
            <div class="row flex-center pb-3">
                <div class="col-md-6 order-0">
                    <p class="text-200 text-center text-md-start">Copyright &copy; esmg.co.ir 2022 </p>
                </div>
            </div>
        </div>
    </section>
</main>
<script src="{{asset('js/site.js')}}"></script>
<script>
    window.addEventListener("load", function () {
        let carousel2 = document.querySelector('.carousel2');
        $.ajaxSetup({headers: {'csrftoken': '{{ csrf_token() }}'}});
        $.ajax({
            type: 'get',
            url: "{{ route('site.slideshows.ajax.getData') }}",
            success: function (response) {
                carousel2.innerHTML = '';
                response.forEach(function (item, index) {
                    let slide = `
        <div class="carousel__face"
             style="background-image: url(${item.images.url})">
            <div class="m-auto text-center text-light">
                <h4>${item.title}</h4>
                <p class="small">
               ${item.description}
                </p>
            </div>
        </div>`;
                    carousel2.innerHTML += slide;
                });
            }
        });
    });

</script>
<script>
    function zoomIn(id) {
        id.style.scale = 1.1
    }

    function zoomOut(id) {
        id.style.scale = 1
    }
</script>
@yield('script')
</body>
</html>

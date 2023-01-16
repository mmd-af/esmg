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
    @yield('style')
</head>
<body>
@include('site.sections.navbar')
<div class="container hideHeader pb-3 my-3 text-white text-center content-zoom">
    <div class="titleEffect">
        <span class="letter">ارم</span>
        <span class="letter">صنعت</span>
        <span class="letter">موج</span>
        <span class="letter">گستر</span>
        <div></div>
        <span class="letter display-1">ESMG</span>
        <div></div>
        <span class="letter small">دانش</span>
        <span class="letter small">بنیان</span>
    </div>
</div>
@yield('content')
@include('site.sections.footer')
@include('site.sections.chat')
<script src="{{asset('js/site.js')}}"></script>
<script src="{{asset('js/scrollreveal.js')}}"></script>
{{--<script>--}}
{{--    window.addEventListener("load", function () {--}}
{{--        let carousel2 = document.querySelector('.carousel2');--}}
{{--        $.ajaxSetup({headers: {'csrftoken': '{{ csrf_token() }}'}});--}}
{{--        $.ajax({--}}
{{--            type: 'get',--}}
{{--            url: "{{ route('site.slideshows.ajax.getData') }}",--}}
{{--            success: function (response) {--}}
{{--                carousel2.innerHTML = '';--}}
{{--                response.forEach(function (item, index) {--}}
{{--                    let slide = `--}}
{{--        <div class="carousel__face"--}}
{{--             style="background-image: url(${item.images.url})">--}}
{{--            <div class="m-auto text-center text-light">--}}
{{--                <h4>${item.title}</h4>--}}
{{--                <p class="small">--}}
{{--               ${item.description}--}}
{{--                </p>--}}
{{--            </div>--}}
{{--        </div>`;--}}
{{--                    carousel2.innerHTML += slide;--}}
{{--                });--}}
{{--            }--}}
{{--        });--}}
{{--    });--}}

{{--</script>--}}

<script>
    (function scrollReveal() {
        window.sr = ScrollReveal();
        sr.reveal('.reveal-content', {
            duration: 1000,
            distance: '70px',
            easing: 'ease-out',
            origin: 'bottom',
            reset: true,
            scale: 1,
            viewFactor: 0
        }, 150);
    })();
</script>
@yield('script')
</body>
</html>

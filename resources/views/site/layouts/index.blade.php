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
<script>
    let setCategory = document.getElementById('setCategory');
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'GET',
            url: '{{ route('site.categories.ajax.getCategory') }}',
            success: function (response) {
                setCategory.innerHTML= `
                          <li class="nav-item">
                        <a class="nav-link mx-2 text-light" href="{{ route('site.projects.index') }}">پروژه های ما</a>
                    </li>`;
                response.forEach((data) => {
                    let catLink = '{{ route('site.categories.show', ':slug') }}';
                    catLink = catLink.replace(':slug', data.slug);
                    let categoryData = `
                          <li class="nav-item">
                        <a class="nav-link mx-2 text-light" href="${catLink}">${data.title}</a>
                    </li>`;
                    setCategory.innerHTML += categoryData;
                })
            }
        }).fail(function () {
            Swal.fire({
                icon: 'error',
                title: 'خطا!!',
                text: 'یه جای کار میلنگه'
            });
        });
    });

</script>
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
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".btn-submit").click(function (e) {
        e.preventDefault();
        var phone = $("input[name=phone]").val();
        var description = $("textarea[name=description]").val();
        $.ajax({
            type: 'POST',
            url: "{{ route('site.messages.ajax.store') }}",
            data: {phone: phone, description: description},
        }).done(function () {
            Swal.fire({
                icon: 'success',
                title: 'متشکریم...',
                text: 'پیام شما با موفقیت ارسال شد.'
            });
        }).fail(function () {
            Swal.fire({
                icon: 'error',
                title: 'خطا!!',
                text: 'شماره ی همراه و متن پیام اجباری می باشد.'
            });
        });
    });
</script>
@yield('script')
</body>
</html>

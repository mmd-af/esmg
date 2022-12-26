<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>ارم صنعت موج گستر - دانش بنیان</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicons/favicon.ico')}}">
    <meta name="theme-color" content="#ccffff">
    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{asset('css/app.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/lightbox.css')}}" rel="stylesheet"/>

</head>


<body>
<main class="main" id="top">
    @include('site.sections.navbar')
    <section id="home">
        <div class="bg-holder"
             style="background-image:url('img/gallery/hero-header.png');background-position:center;background-size:cover;">
        </div>
        <div class="container">
            <div class="row align-items-center min-vh-10 min-vh-sm-5">
                <div class="col-md-5 col-lg-6 order-0 order-md-1">
                    <img class="w-55" src="{{asset('img/illustrations/esmg.png')}}" alt="ارم صنعت موج گستر"/>
                </div>
                <div class="col-md-7 col-lg-6 text-md-start text-center">
                    <h1 class="text-light fs-md-5 fs-lg-6">ارم صنعت موج گستر</h1>
                    <p class="text-light">دانش بنیان</p><a class="btn btn-outline-secondary" href="#" role="button">پروژه
                        ها</a>
                </div>
            </div>
        </div>
    </section>
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
                    <p class="text-200 text-center text-md-start">Copyright &copy; esmg.co.ir 2021 - Powered by <a
                            href="https://fourpluse.ir" target="_blank">fourpluse.ir</p>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->


<!-- ===============================================-->
<!--    JavaScripts-->
<!-- ===============================================-->

<script src="{{asset('js/app.js')}}"></script>
@yield('script')
</body>

</html>

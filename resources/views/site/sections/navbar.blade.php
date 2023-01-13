<nav class="navbar navbar-expand-sm navbar-light sticky-top bg-gradiant border border-white reveal-content" id="neubar">
    <div class="container">
        <a class="navbar-brand bg-white" style="border-radius: 25px" href="{{route('home.index')}}"><img class="content-zoom" src="{{asset('img/gallery/logo2.png')}}" height="60" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item">
                    <a class="nav-link mx-2 active" aria-current="page" href="{{route('home.index')}}">خانه</a>
                </li>
                <li class="nav-item">
                    <a class="text-light nav-link mx-2" href="#">Products</a>
                </li>
                <li class="nav-item">
                    <a class="text-light nav-link mx-2" href="#">Pricing</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="text-light nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Company
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="text-light dropdown-item" href="#">Blog</a></li>
                        <li><a class="text-light dropdown-item" href="#">About Us</a></li>
                        <li><a class="text-light dropdown-item" href="#">Contact us</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>


{{--<nav class="navbar navbar-expand-lg navbar-light fixed-top d-block bg-primary"--}}
{{--     data-navbar-on-scroll="data-navbar-on-scroll" id="navbarToggleExternalContent">--}}
{{--    <div class="container">--}}
{{--        <a class="navbar-brand rounded-pill" style="background-color:#ccffff" href="{{route('homepage')}}">--}}
{{--            <img src="{{asset('img/gallery/logo2.png')}}" height="24" alt=""/></a>--}}
{{--        <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"--}}
{{--                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}
{{--        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">--}}
{{--            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">--}}
{{--                <li class="nav-item px-2">--}}
{{--                    <a href="{{route('homepage')}}" class="nav-link active" aria-current="page">صفحه ی اصلی</a></li>--}}

{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"--}}
{{--                       data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                        محصولات آزمایشگاهی--}}
{{--                    </a>--}}
{{--                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                        <li><a class="dropdown-item" href="{{route('sheets.pompsorangi')}}">پمپ سرنگی</a></li>--}}
{{--                        <li><a class="dropdown-item" href="{{route('sheets.tighemosatahkonande')}}">تیغه مسطح کننده</a>--}}
{{--                        </li>--}}
{{--                        <li><a class="dropdown-item" href="{{route('sheets.controldama')}}">کنترل کننده دما</a></li>--}}
{{--                        <li><a class="dropdown-item" href="{{route('sheets.poosheshsathi')}}">پوشش دهنده سطحی</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"--}}
{{--                       data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                        محصولات صنعتی--}}
{{--                    </a>--}}
{{--                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                        <li><a class="dropdown-item" href="{{route('sheets.pizoelectric')}}">درایور پیزو الکتریک</a>--}}
{{--                        </li>--}}
{{--                        <li><a class="dropdown-item" href="{{route('sheets.hefazatrahdoor')}}">سیستم حفاظت راه دور و--}}
{{--                                توسعه ناحیه حفاظت رله DEF</a></li>--}}
{{--                        <li><a class="dropdown-item" href="{{route('sheets.mashinsooech')}}">درایو ماشین سوییچ--}}
{{--                                رلوکتانس</a></li>--}}
{{--                        <li><a class="dropdown-item" href="{{route('sheets.mabdal')}}">مبدل DC به AC افزاینده توان--}}
{{--                                بالا</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}


{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"--}}
{{--                       data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                        اتوماسیون--}}
{{--                    </a>--}}
{{--                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                        <li><a class="dropdown-item" href="{{route('sheets.taghsim')}}">واحد تقسیم واکسن</a></li>--}}
{{--                        <li><a class="dropdown-item" href="{{route('sheets.ayarsanj')}}">واحد عیار سنج قند</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li class="nav-item px-2">--}}
{{--                    <a class="nav-link" href="{{route('sheets.contactus')}}">تماس با ما</a></li>--}}
{{--                <a class="btn btn-outline-secondary order-1 order-lg-0" href="{{route('login')}}">ورود--}}
{{--                    <i class="fas fa-arrow-alt-circle-up"></i></a>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}

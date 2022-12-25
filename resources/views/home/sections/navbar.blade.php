    {{-- ghadimi --}}
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-4 d-block bg-primary" data-navbar-on-scroll="data-navbar-on-scroll" id="navbarToggleExternalContent">
    <div class="container">
    <a class="navbar-brand rounded-pill" style="background-color:#ccffff" href="{{route('homepage')}}">
        <img src="{{asset('img/gallery/logo2.png')}}" height="24" alt="" /></a>


        <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
                <li class="nav-item px-2">
            <a href="{{route('homepage')}}" class="nav-link active" aria-current="page" >صفحه ی اصلی</a></li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            محصولات آزمایشگاهی
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{route('sheets.pompsorangi')}}">پمپ سرنگی</a></li>
                            <li><a class="dropdown-item" href="{{route('sheets.tighemosatahkonande')}}">تیغه مسطح کننده</a></li>
                            <li><a class="dropdown-item" href="{{route('sheets.controldama')}}">کنترل کننده دما</a></li>
                            <li><a class="dropdown-item" href="{{route('sheets.poosheshsathi')}}">پوشش دهنده سطحی</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            محصولات صنعتی
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{route('sheets.pizoelectric')}}">درایور پیزو الکتریک</a></li>
                            <li><a class="dropdown-item" href="{{route('sheets.hefazatrahdoor')}}">سیستم حفاظت راه دور و توسعه ناحیه حفاظت رله DEF</a></li>
                            <li><a class="dropdown-item" href="{{route('sheets.mashinsooech')}}">درایو ماشین سوییچ رلوکتانس</a></li>
                            <li><a class="dropdown-item" href="{{route('sheets.mabdal')}}">مبدل DC به AC افزاینده توان بالا</a></li>
                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            اتوماسیون
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{route('sheets.taghsim')}}">واحد تقسیم واکسن</a></li>
                            <li><a class="dropdown-item" href="{{route('sheets.ayarsanj')}}">واحد عیار سنج قند</a></li>
                        </ul>
                    </li>

                    <li class="nav-item px-2">
                        <a class="nav-link" href="{{route('sheets.contactus')}}">تماس با ما</a></li>
                        <a class="btn btn-outline-secondary order-1 order-lg-0" href="{{route('login')}}">ورود
                            <i class="fas fa-arrow-alt-circle-up"></i></a>
                        </ul>
            </div>
    </div>
</nav>

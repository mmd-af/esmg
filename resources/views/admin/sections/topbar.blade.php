<nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow" style="background-color:#ccffff;">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle">
        <i class="fa fa-bars" style="margin-top: 4px;"></i>
    </button>

    <!-- Topbar Search -->
{{--    <form class="d-none d-sm-inline-block form-inline ml-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">--}}
{{--        <div class="input-group">--}}
{{--            <input type="text" class="form-control border-0 small order-2" placeholder="جستجو ..."--}}
{{--                   aria-label="Search" aria-describedby="basic-addon2">--}}
{{--            <div class="input-group-append">--}}
{{--                <button class="btn btn-light" type="button">--}}
{{--                    <i class="fas fa-search fa-sm"></i>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </form>--}}

<!-- Topbar Navbar -->
    <ul class="navbar-nav mr-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
    {{--        <li class="nav-item dropdown no-arrow d-sm-none">--}}
    {{--            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"--}}
    {{--               aria-haspopup="true" aria-expanded="false">--}}
    {{--                <i class="fas fa-search fa-fw"></i>--}}
    {{--            </a>--}}
    {{--            <!-- Dropdown - Messages -->--}}
    {{--            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"--}}
    {{--                 aria-labelledby="searchDropdown">--}}
    {{--                <form class="form-inline mr-auto w-100 navbar-search">--}}
    {{--                    <div class="input-group">--}}
    {{--                        <input type="text" class="form-control bg-light border-0 small order-2" placeholder="جستجو ..."--}}
    {{--                               aria-label="Search" aria-describedby="basic-addon2">--}}
    {{--                        <div class="input-group-append">--}}
    {{--                            <button class="btn btn-primary" type="button">--}}
    {{--                                <i class="fas fa-search fa-sm"></i>--}}
    {{--                            </button>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </form>--}}
    {{--            </div>--}}
    {{--        </li>--}}


    <!-- Nav Item - Alerts -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a onclick="getMessages()" class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Alerts -->
                <div id="checkNewMessage">
                </div>
            </a>
            <!-- Dropdown - Alerts -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in text-right"
                 aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                   پیام های دریافتی
                </h6>
                <div id="getMessages">
                </div>
{{--                <a class="dropdown-item text-center small text-gray-500" href="#"> مشاهده تمام </a>--}}
            </div>
        </li>
        <div class="topbar-divider d-none d-sm-block"></div>
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <span class="ml-2 d-none d-lg-inline text-gray-600 small">{{auth()->user()->name}}</span>
                <i class="fas fa-cog"></i>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in text-right"
                 aria-labelledby="userDropdown">
                {{-- <a class="dropdown-item" href="#">
                <i class="fas fa-user fa-sm fa-fw ml-2 text-gray-400"></i>
                دکمه اضافه
                </a> --}}
                <div class="dropdown-divider"></div>
                <form class="dropdown-item" action="{{route('logout')}}" method="post">
                    @csrf
                    <i class="fas fa-sign-out-alt fa-sm fa-fw ml-2 text-gray-400"></i>
                    <button type="submit" class="btn btn-link">خروج</button>
                </form>
            </div>
        </li>
    </ul>
</nav>
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> لورم ایپسوم متن ساختگی </h5>
                <button class="close ml-0" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                گرافیک
                است.
            </div>
            <div class="modal-footer">
                <a class="btn btn-primary" href="login.html"> خروج </a>
                <button class="btn btn-secondary" type="button" data-dismiss="modal"> لغو</button>
            </div>
        </div>
    </div>
</div>

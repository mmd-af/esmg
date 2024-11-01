<nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow" style="background-color:#ccffff;">

    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle">
        <i class="fa fa-bars" style="margin-top: 4px;"></i>
    </button>
    <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown no-arrow mx-1">
            <a onclick="getMessages()" class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
               data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <div id="checkNewMessage">
                </div>
            </a>
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in text-right"
                 aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                    پیام های دریافتی
                </h6>
                <div id="getMessages">
                </div>
            </div>
        </li>
        <div class="topbar-divider d-none d-sm-block"></div>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <span class="ml-2 d-none d-lg-inline text-gray-600 small">{{auth()->user()->name}}</span>
                <i class="fas fa-cog"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in text-right"
                 aria-labelledby="userDropdown">
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

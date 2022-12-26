<ul class="navbar-nav sidebar sidebar-dark accordion pr-0" style="background-color:#006666;" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-file-alt"></i>
        </div>
        <div class="sidebar-brand-text mx-3">esmg.co.ir</div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.adminindex')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span> داشبورد </span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
@if (auth()->user()->rolls == 'admin')
    <!-- Heading -->
        <div class="sidebar-heading">
            مدیریت:
        </div>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsetests"
               aria-expanded="true"
               aria-controls="collapsePages">
                <i class="fas fa-map"></i>
                <span> تنظیمات پروژه ها</span>
            </a>
            <div id="collapsetests" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{route('projects.index')}}">پروژه ها</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseusers"
               aria-expanded="true"
               aria-controls="collapsePages">
                <i class="fas fa-user"></i>
                <span> کاربران </span>
            </a>
            <div id="collapseusers" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="#">نمایش کاربران</a>
                </div>
            </div>
        </li>
        <hr class="sidebar-divider">
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.slideshows.index')}}">
                <i class="fa-solid fa-guitar"></i>
                <span>کنترل اسلایدشو</span></a>
        </li>
@endif
<!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>

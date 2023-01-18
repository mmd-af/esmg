<nav class="navbar navbar-expand-sm navbar-light sticky-top bg-gradiant border border-white" id="neubar">
    <div class="container">
        <a class="navbar-brand bg-white" style="border-radius: 25px" href="{{route('home.index')}}"><img
                class="content-zoom" src="{{asset('img/gallery/logo2.png')}}" height="60"/></a>
        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class=" collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto" id="setCategory">
                <li class="nav-item">
                    <a class="nav-link mx-2 text-light" href="#">
                        <div class="spinner-border" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

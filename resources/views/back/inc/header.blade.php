<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{asset("backend/img/user.jpg")}}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">ayseturan</h6>
                <span>yazılım</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{route("anasayfa")}}" target="_blank" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>siteyi görüntüle</a>
            <a href="{{route("admin.fotograflar.index")}}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Resim</a>
            <a href="{{route("admin.album.index")}}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Albümler</a>
            <a href="{{route("admin.music.index")}}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Müzikler</a>
            <a href="{{route("admin.yorum.index")}}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Yorumlar</a>
            <a href="{{route("admin.haber.index")}}" class="nav-item nav-link"><i class="a fa-keyboard me-2"></i>Haberler</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Sayfa</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="signin.html" class="dropdown-item">Sign In</a>
                    <a href="signup.html" class="dropdown-item">Sign Up</a>
                    <a href="404.html" class="dropdown-item">404 Error</a>
                    <a href="blank.html" class="dropdown-item">Haberler</a>
                </div>
            </div>
        </div>
    </nav>
</div>

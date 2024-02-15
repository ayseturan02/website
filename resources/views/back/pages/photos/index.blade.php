
@extends("back.layout.app")
@section("content")

    <!-- Content Start -->
    <div class="content">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
            <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
            </a>
            <a href="#" class="sidebar-toggler flex-shrink-0">
                <i class="fa fa-bars"></i>
            </a>
            <form class="d-none d-md-flex ms-4">
                <input class="form-control bg-dark border-0" type="search" placeholder="Search">
            </form>
            <div class="navbar-nav align-items-center ms-auto">
                <div class="nav-item dropdown">
                    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        <a href="#" class="dropdown-item">
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                        </a>
                        <hr class="dropdown-divider">
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item text-center">See all message</a>
                    </div>
                </div>
                <div class="nav-item dropdown">

                </div>
                <div class="nav-item dropdown">
                    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">

                    </div>
                </div>
            </div>
        </nav>

        <div class="bg-secondary rounded h-100 p-4">
            <h1 style="color: red">R E S İ M L E R</h1>
            <div class="bg-secondary rounded h-100 p-4">
                <div class="m-n2">
                    <a href="{{route("admin.fotograflar.create")}}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Resim ekle</a>
                </div>
                <br>

                <div class="col-md-7 col-md-push-1" id="photostable" >
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInRight" >
                            <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
                            </div>
                            @foreach($photos as $photo)
                                <div class="row">
                                    <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                        <td>
                                            <img class="project"   src="{{asset("images/".$photo->photo)}}" width="200" > <br>
                                        </td>
                                        <div class="desc">
                                        </div>
                                    </div>

                                </div>
                                <a href="{{route("admin.fotograflar.destroy", $photo->id )}}" class="btn btn-danger btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                    <span class="text">Sil</span>
                                </a>
                            @endforeach

                            <br>
                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>

    <!-- Content End -->


@endsection

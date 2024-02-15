
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
            <h1 style="color: red">R E S İ M   E K L E</h1>
            <div class="bg-secondary rounded h-100 p-4">

                <form action="{{ route('admin.fotograflar.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label style="color: #fff4fd" for="photo">Fotoğraf Seç:</label><br>
                    <input type="file" name="photo" id="photo"><br>
                    <button type="submit">Yükle</button>
                </form>
            </div>

        </div>

    </div>

    <!-- Content End -->


@endsection

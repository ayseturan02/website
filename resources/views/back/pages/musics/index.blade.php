
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
            <h1 style="color: red">M Ü Z İ K L E R </h1>
            <div class="col-sm-12 col-xl-6">
                    <table class="table table-hover">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h6 class="mb-0">Müzikler</h6>
                            <a href="{{route("admin.music.create")}}">MÜZİK EKLE</a>
                        </div>
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ŞARKI İSMİ</th>
                            <th scope="col">SANATÇI/GRUP</th>
                            <th scope="col">AUDİO</th>
                            <th scope="col">FOTOĞRAF</th>
                            <th scope="col">SİL</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($musics as $music)
                        <tr>
                            <th scope="row">{{$music->id}}</th>
                            <td>{{$music->name}}</td>
                            <td>{{$music->artist}}</td>
                            <td>{{$music->audio}}</td>
                            <td>{{$music->photo}}</td>
                           <td><div class="m-n2">
                                    <a type="button" href="{{route("admin.music.destroy",$music->id)}}" class="btn btn-outline-danger m-2">sil</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

@endsection

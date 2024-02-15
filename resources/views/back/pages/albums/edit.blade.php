
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
            <h1 style="color: red">A L B Ü M - E K L E </h1>

            <div class="col-sm-12 col-xl-6">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">albümü güncelle</h6>
                    @if(isset($albums))
                    <form  action="{{route("admin.album.update",$albums->id)}}" class="form-sample" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" name="name" class="form-control" id="floatingInput" value="{{$albums->name}}">
                            <label for="floatingInput">album ismi</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="tür" class="form-control" id="floatingInput" value="{{$albums->tür}}">
                            <label for="floatingInput">album türü</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="category" class="form-control" id="floatingInput" value="{{$albums->category}}">
                            <label for="floatingInput">hangi kategori</label>
                        </div>
                        <div class="form-group">
                            <label>Resim</label>
                            <input type="file" name="image" value="{{$albums->photo }}" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button" >Upload</button>
                        </span>
                            </div>
                        </div>

                        <button type="submit">Yükle</button>
                    </form>
                    @else
                    sayılmaz
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection

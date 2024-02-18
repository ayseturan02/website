
@extends("back.layout.app")
@section("content")

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
        <h1 class="mb-4" style="color: #6a1a21"> C O M M E N T S</h1>
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">İsim</th>
                <th scope="col">Mail</th>
                <th scope="col">Konu</th>
                <th scope="col">Görüntüle</th>
                <th scope="col">Sil</th>


            </tr>
            </thead>
            @foreach($comments as $comment) @endforeach
            <tbody>
            <tr>
                <td scope="row">{{$comments->id}}</td>
                <th >{{$comments->name}}</th>
                <td>{{$comments->email}}</td>
                <td>{{$comments->subject}}</td>
                <td><div class="m-n2">
                        <a type="button" href="{{route("admin.görüntüle.edit",$comments->id)}}" class="btn btn-outline-success m-2">görüntüle</a>
                    </div></td>
                <td><div class="m-n2">
                        <a type="button" href="{{route("admin.yorum.destroy",$comments->id)}}" class="btn btn-outline-danger m-2">sil</a>
                    </div>
                </td>

            </tr>
            </tbody>
            @endforeach
        </table>
    </div>

    </div>
@endsection

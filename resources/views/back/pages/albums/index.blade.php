
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
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fa fa-envelope me-lg-2"></i>
                        <span class="d-none d-lg-inline-flex">Message</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        <a href="#" class="dropdown-item">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="ms-2">
                                    <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                    <small>15 minutes ago</small>
                                </div>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="ms-2">
                                    <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                    <small>15 minutes ago</small>
                                </div>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="ms-2">
                                    <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                    <small>15 minutes ago</small>
                                </div>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item text-center">See all message</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fa fa-bell me-lg-2"></i>
                        <span class="d-none d-lg-inline-flex">Notificatin</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        <a href="#" class="dropdown-item">
                            <h6 class="fw-normal mb-0">Profile updated</h6>
                            <small>15 minutes ago</small>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <h6 class="fw-normal mb-0">New user added</h6>
                            <small>15 minutes ago</small>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <h6 class="fw-normal mb-0">Password changed</h6>
                            <small>15 minutes ago</small>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item text-center">See all notifications</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <span class="d-none d-lg-inline-flex">John Doe</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        <a href="#" class="dropdown-item">My Profile</a>
                        <a href="#" class="dropdown-item">Settings</a>
                        <a href="#" class="dropdown-item">Log Out</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="bg-secondary rounded h-100 p-4">
            <h1 style="color: red">A L B Ü M L E R </h1>

            <div class="bg-secondary text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Albümler</h6>
                    <a href="{{route("admin.album.create")}}">ALBÜM EKLE </a>
                </div>
                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                        <tr class="text-white">
                            <th scope="col"></th>
                            <th scope="col">İsim</th>
                            <th scope="col">Tür</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Resim</th>
                            <th scope="col">Sil</th>
                            <th scope="col">güncelle</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($albums as $album)
                        <tr>
                            <td><input class="form-check-input" type="checkbox"></td>
                            <td>{{$album->name}}</td>
                            <td>{{$album->tür}}</td>
                            <td>{{$album->category}}</td>
                            <td>{{$album->photo}}</td>
                            <td><div class="m-n2">
                                    <a type="button" href="{{route("admin.album.destroy",$album->id)}}" class="btn btn-outline-danger m-2">sil</a>
                                </div>
                            </td>
                            <td><div class="m-n2">
                                    <a type="button" href="{{route("admin.album.edit",$album->id)}}" class="btn btn-outline-success m-2">güncelle</a>
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

@section("customjs")
    <script>
        $(document).on("click",".sbtn btn",function(e) {
            e.preventDefault();
            var item=$(this).closest(".item");
            id=item.attr("item-id");
            alertify.confirm("Silmek istediğinize emin misiniz?","Silmek istediğinize emin misiniz?",
                function(){
                    $.ajax({
                        headers:{
                            "X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr('content')
                        },
                        type:"DELETE",
                        url:"{{route('admin.album.destroy',$album->id)}}",
                        data:{
                            id:id,
                        },
                        success: function(response){

                            if(response.error === false){
                                item.remove();
                                alertify.success(response.message);
                            }else{
                                alertify.error("bir hata oluştu")
                            }
                        }
                    });
                },
                function(){
                    alertify.error('Silme İptal Edildi');
                });
        });

    </script>

@endsection

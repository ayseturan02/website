@extends("front.layout.app1")
@section("content")

    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url({{asset("frontend/img/bg-img/breadcumb3.jpg")}});">
        <div class="bradcumbContent">
            <p>KAYIT İÇİN KRAL</p>
            <h2>KAYIT OL</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Login Area Start ##### -->
    <section class="login-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="login-content">
                        <h3>Welcome</h3>
                        @if($errors ->any())
                            <div class="alert alert-danger">
                                {{$errors->first()}}
                            </div>
                        @endif
                        <!-- Login Form -->
                        <div class="login-form">
                            <form action="{{route("admin.register.store")}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label >Kullanıcı Adı</label>
                                    <input type="text" id="name" name="name" class="form-control"  placeholder="benzersiz bir kullanıcı ismi bul">
                                </div>
                                <div class="form-group">
                                    <label >Email </label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter E-mail">
                                    <small id="emailHelp" class="form-text text-muted"><i class="fa fa-lock mr-2"></i>We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label >Şifre</label>
                                    <input type="password"  id="password"  name="password" class="form-control"  placeholder="Password">
                                </div>
                                <button type="submit" class="btn oneMusic-btn mt-30">KAYIT OL</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Login Area End ##### -->

@endsection

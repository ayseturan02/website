@extends("front.layout.app1")
@section("content")

<section class="breadcumb-area bg-img bg-overlay" style="background-image: url({{asset("frontend/img/bg-img/breadcumb3.jpg")}});">
    <div class="bradcumbContent">
        <p>GİRİŞ YAP ABİCİM</p>
        <h2>GİRİŞ</h2>
    </div>
</section>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Login Area Start ##### -->
<section class="login-area section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="login-content">
                    <h3>Welcome Back</h3>
                    @if($errors ->any())
                        <div class="alert alert-danger">
                            {{$errors->first()}}
                        </div>
                    @endif
                    <!-- Login Form -->
                    <div class="login-form">
                        <form action="{{route("admin.login.post")}}" method="post"  enctype="multipart/form-data">
                           @csrf
                            <div class="form-group">
                                <label >Email address</label>
                                <input type="email" name="email" class="form-control"  placeholder="Enter E-mail">
                            </div>
                            <div class="form-group">
                                <label >Password</label>
                                <input type="password" name="password" class="form-control"  placeholder="Password">
                            </div>
                            <button type="submit" class="btn oneMusic-btn mt-30" >giriş</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Login Area End ##### -->

@endsection

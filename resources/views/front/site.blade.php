@extends("front.layout.app1")
@section("content")

<div class="single-hero-slide d-flex align-items-center justify-content-center">
    <!-- Slide Img -->
    <div class="slide-img bg-img" style="background-image: url({{asset("frontend/img/bg-img/bg-2.jpg")}});"></div>
    <!-- Slide Content -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="hero-slides-content text-center">
                    <h6 data-animation="fadeInUp" data-delay="100ms">Latest album</h6>
                    <h2 data-animation="fadeInUp" data-delay="300ms">Colorlib Music <span>Colorlib Music</span></h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

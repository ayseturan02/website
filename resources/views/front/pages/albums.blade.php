@extends("front.layout.app")
@section("content")

    <!-- ##### Breadcumb Area Start ##### -->
<section class="breadcumb-area bg-img bg-overlay" style="background-image: url({{asset("frontend/img/bg-img/breadcumb3.jpg")}});">
    <div class="bradcumbContent">
        <p>See what’s new</p>
        <h2>Latest Albums</h2>
    </div>
</section>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Album Catagory Area Start ##### -->

<section class="album-catagory section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="browse-by-catagories catagory-menu d-flex flex-wrap align-items-center mb-70">
                    <a href="#" data-filter="*">Browse All</a>
                    <a href="#" data-filter=".a" class="active">A</a>
                    <a href="#" data-filter=".b">B</a>
                    <a href="#" data-filter=".c">C</a>
                    <a href="#" data-filter=".d">D</a>
                    <a href="#" data-filter=".e">E</a>
                    <a href="#" data-filter=".f">F</a>
                    <a href="#" data-filter=".g">G</a>
                    <a href="#" data-filter=".h">H</a>
                    <a href="#" data-filter=".i">I</a>
                    <a href="#" data-filter=".j">J</a>
                    <a href="#" data-filter=".k">K</a>
                    <a href="#" data-filter=".l">L</a>
                    <a href="#" data-filter=".m">M</a>
                    <a href="#" data-filter=".n">N</a>
                    <a href="#" data-filter=".o">O</a>
                    <a href="#" data-filter=".p">P</a>
                    <a href="#" data-filter=".q">Q</a>
                    <a href="#" data-filter=".r">R</a>
                    <a href="#" data-filter=".s">S</a>
                    <a href="#" data-filter=".t">T</a>
                    <a href="#" data-filter=".u">U</a>
                    <a href="#" data-filter=".v">V</a>
                    <a href="#" data-filter=".w">W</a>
                    <a href="#" data-filter=".x">X</a>
                    <a href="#" data-filter=".y">Y</a>
                    <a href="#" data-filter=".z">Z</a>
                    <a href="#" data-filter=".number">0-9</a>
                </div>
            </div>
        </div>

        <div class="row oneMusic-albums">
  @foreach($albums as $album)
            <!-- Single Album -->
            <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item t c p">
                <div class="single-album">
                    <img src="{{asset("images/".$album->photo)}}" alt="">
                    <div class="album-info">
                        <a href="#">
                            <h5>{{$album->name}}</h5>
                        </a>
                        <p>{{$album->tür}}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="load-more-btn text-center">
                <a href="https://open.spotify.com/search"  target="_blank" class="btn oneMusic-btn">Daha Fazla Albüm <i class="fa fa-angle-double-right"></i></a>
            </div>
        </div>
    </div>
</section>
    <br>
<!-- ##### Album Catagory Area End ##### -->


<!-- ##### Add Area Start ##### -->
<div class="add-area mb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="adds">
                    <a href="#"><img src="{{asset("frontend/img/bg-img/add3.gif")}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Add Area End ##### -->

<!-- ##### Song Area Start ##### -->
    <div class="one-music-songs-area mb-70">
        <div class="container">
            <div class="row">
                @foreach($musics as $music)

                    <!-- Single Song Area -->
                    <div class="col-12">
                        <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                            <div class="song-thumbnail">
                                <img src="{{asset("images/".$music->photo)}}" alt="">
                            </div>
                            <div class="song-play-area">
                                <div class="song-name">
                                    <p>{{$music->name}}-{{$music->artist}}</p>
                                </div>
                                <audio preload="auto" controls>
                                    <source src="{{asset("audio/".$music->audio)}}">
                                </audio>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
<!-- ##### Song Area End ##### -->

<!-- ##### Contact Area Start ##### -->
<section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url({{asset("frontend/img/bg-img/bg-2.jpg")}});">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading white">
                    <p>See what’s new</p>
                    <h2>Get In Touch</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <!-- Contact Form Area -->
                <div class="contact-form-area">
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn oneMusic-btn mt-30" type="submit">Send <i class="fa fa-angle-double-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Contact Area End ##### -->

@endsection

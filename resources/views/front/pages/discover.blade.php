@extends("front.layout.app")
@section("content")

    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url({{asset("frontend/img/bg-img/breadcumb3.jpg")}});">
        <div class="bradcumbContent">
            <p>hepsi yok ha</p>
            <div class="form-group pull-center">
                <input type="text" class="search form-control" placeholder="MÜZİK ARA">
            </div>

        </div>
    </section>

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

@endsection

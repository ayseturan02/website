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
    <br><br><br>

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
                        <button type="button" class="btn btn-outline-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143q.09.083.176.171a3 3 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                    @endforeach


            </div>
        </div>
    </div>

@endsection

@extends('layouts.homepage-user')

@section('main')
<div class="show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <a href="#"><img src="{{asset('images/'.$article->image_art)}}" alt="{{ $article->judul_artikel }}" class="rounded"></a>
      </div>
      <div class="col">
        <div class="post-item">
          <div class="right-content">
              <div class="right-content-top">
                <a href="{{ route('landinguser') }}">Home</a> / <span class="text-black b-bold">{{ $article->judul_artikel }}</span><br><br>
                <span class="category">{{$article->penulis}}</span>
                <span class="date">{{$article->created_at}}</span>
              </div>
            <a href="#"><h4>{{$article->judul_artikel}}</h4></a>
            <p style="color: #000; text-align:justify;">
              {{$article->konten}}
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
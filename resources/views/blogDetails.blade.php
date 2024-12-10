@extends('layout')


@section('content')

  <div class="page-section pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <nav aria-label="Breadcrumb">
            <ol class="breadcrumb bg-transparent py-0 mb-5">
              <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('blog')}}">Tips</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
            </ol>
          </nav>
        </div>
      </div> <!-- .row -->

          <div class="row">
            <div class="col-lg-8">
              <article class="blog-details">
                <div class="post-thumb">
                  <img src={{ asset('storage/' . $post->image) }} alt="">
                </div>
                <div class="post-meta">
                  <div class="post-author">
                    <span class="text-grey">By</span> <a href="#">Admin</a>  
                  </div>
                  <span class="divider">|</span>
                  <div class="post-date">
                    <a href="#">{{$post->created_at}}</a>
                  </div>
                  <span class="divider">|</span>
                  <div class="post-comment-count">
                    <a href="#">8 Comments</a>
                  </div>
                </div>
                <h2 class="post-title h1">{{ $post->title }}</h2>
                <div class="post-content">
                  <p>{{ $post->discription }}</p>

                  
                </div>
                
            </div>
        </div>
      </div>
  </div>

@endsection
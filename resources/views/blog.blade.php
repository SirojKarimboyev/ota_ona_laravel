@extends('layout')


@section('content')

  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blog</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">News</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">


            @foreach($posts as $post)
          <div class="col-lg-4 py-2 wow zoomIn">
            <div class="card-blog">
              <div class="header">
                <div class="post-category">
                  <a href="#">Covid19</a>
                </div>
                <a href={{route('details',$post->id)}} class="post-thumb">
                  <img src="{{ asset('storage/' . $post->image) }}" alt="">
                </a>
              </div>
              <div class="body">
                <h5 class="post-title"><a href={{route('details',$post->id)}}>{{ $post->title }}</a></h5>
                <div class="site-info">
                  <div class="avatar mr-2">
                    <div class="avatar-img">
                      <img src="../assets/img/person/person_1.jpg" alt="">
                    </div>
                    <span>Doctor</span>
                  </div>
                  <span class="mai-time"></span> {{ $post->created_at->diffForHumans() }}
                </div>
              </div>
            </div>
          </div>
        @endforeach

            <div class="col-12 my-5">
              <nav aria-label="Page Navigation">
                <ul class="pagination justify-content-center">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                  </li>
                  <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div> <!-- .row -->
          <div class="col-lg-4">
          
          </div>
        </div> 
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .page-section -->

        </div>
       
  @endsection
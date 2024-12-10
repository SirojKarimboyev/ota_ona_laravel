@extends('layout')


@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        {{ implode(', ', $errors->all()) }}
    </div>
@endif


  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Keling, hayotingizni yanada baxtli qilaylik</span>
        <h1 class="display-4">Sog'lom turmush tarzi</h1>
        <a href="{{route('blog')}}" class="btn btn-primary">Maslahatlar</a>
      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Chat</span> with a doctors</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>One</span>-Health Protection</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>One</span>-Health Pharmacy</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->


  <div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">So'ngi yangiliklar</h1>
      <div class="row mt-5">
        @foreach($posts->take(3) as $post)
          <div class="col-lg-4 py-2 wow zoomIn">
            <div class="card-blog">
              <div class="header">
                <div class="post-category">
                  <a href="#">Covid19</a>
                </div>
                <a href="blog-details.html" class="post-thumb">
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
        

        <div class="col-12 text-center mt-4 wow zoomIn">
          <a href="{{route('blog')}}" class="btn btn-primary">Ko'proq malumot</a>
        </div>

      </div>
    </div>
  </div> <!-- .page-section -->

  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Biz bilan bog'lanish</h1>

      <!-- Formani moslashtiramiz -->
      <form class="main-form" action="{{ route('contact.submit') }}" method="POST">
        @csrf
        <div class="row mt-5">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="name" class="form-control" placeholder="F.I.SH" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="email" name="email" class="form-control" placeholder="Elektron pochta manzili.." required>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Xabar. Shikoyat yoki takliflaringiz.." required></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Yuborish</button>
      </form>
    </div>
</div>
 <!-- .page-section -->
@endsection
  
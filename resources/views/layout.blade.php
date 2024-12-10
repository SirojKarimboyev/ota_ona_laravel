<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="{{ asset('assets/css/maicons.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/owl-carousel/css/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('index')}}">Bosh Sahifa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('about')}}">Biz haqimizda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('blog')}}">Tavsiyalar</a>
            </li>

            @if (Route::has('login'))
                
                    @auth
                    
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    
                      
                    @else
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">Kirish</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('register') }}">Ro'yxatdan o'tish</a>
                            </li>
                        @endif
                    @endauth
                
            @endif
            @can('create explanation')
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin')}}">Admin Panel</a>
            </li>
            @endcan
          </ul>
        </div>
      </div>
    </nav>
  </header>

  
        @yield('content')
  


  <footer class="page-footer">
    <div class="container">
      <hr>

      <p id="copyright">Copyright &copy; 2024 All right reserved</p>
    </div>
  </footer>

  <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/vendor/wow/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/theme.js') }}"></script>
  
</body>
</html>
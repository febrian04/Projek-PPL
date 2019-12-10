<!doctype html>
<html lang="en">

  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('farm/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ url('farm/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('farm/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ url('farm/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ url('farm/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('farm/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ url('farm/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ url('farm/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/leaflet.css') }}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ url('farm/css/style.css') }}">


  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                <a href="{{ url('/') }}" class="font-weight-bold">
                  <img src="{{ url('farm/images/logo.png')}}" alt="Image" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                
                  <!-- Authentication Links -->
                  @guest
                                   
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <!-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif -->
                        @else

                        @if (Auth::user()->hasAnyRole('dokter'))
                            <li>
                              <a href="{{ url('/chart') }}" class="nav-link">Chart</a>  
                            </li>
                            <li>
                              <a href="{{ url('/hasildata') }}" class="nav-link">Hasil Pemeriksaan</a>  
                            </li>
                            <li>
                              <a href="{{ url('/datapanggil') }}" class="nav-link">Data Pemeriksaan</a>  
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endif

                            @if (Auth::user()->hasAnyRole('peternak'))
                            <li>
                              <a href="{{ url('/chart') }}" class="nav-link">Chart</a>  
                            </li>
                            <li>
                              <a href="{{ url('/datapanggil') }}" class="nav-link">Data Pemeriksaan</a>  
                            </li>
                            <li>
                              <a href="{{ url('/PanggilDokter') }}" class="nav-link">Panggil Dokter</a>  
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endif

                            @if (Auth::user()->hasAnyRole('admin'))
                            <li>
                              <a href="{{ url('/chart') }}" class="nav-link">Chart</a>  
                            </li>
                            <li class="dropdown nav-item">
                              <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                              <i class="material-icons"></i> Data Diri
                              </a>
                            <div class="dropdown-menu dropdown-with-icons">
                              <a href="{{ url('/datadiri/index') }}" class="dropdown-item">
                              <i class="material-icons"></i>Peternak
                              </a>
                                <a href="{{ url('/dokter/dokterbio') }}" class="dropdown-item">
                                <i class="material-icons"></i>Dokter Hewan
                                </a>
                        </div>
                        </li>
                            <li>
                              <a href="{{ url('/datapanggil') }}" class="nav-link">Data Panggil Dokter</a>  
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endif


                        @endguest
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>
    @yield('container')
    
        
      </div>
    </footer>

    </div>

    <script src="{{ url('farm/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ url('farm/js/jquery-migrate-3.0.0.js') }}"></script>
    <script src="{{ url('farm/js/popper.min.js') }}"></script>
    <script src="{{ url('farm/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('farm/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('farm/js/jquery.sticky.js') }}"></script>
    <script src="{{ url('farm/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ url('farm/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ url('farm/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ url('farm/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ url('farm/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ url('farm/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ url('farm/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('farm/js/aos.js') }}"></script>

    <script src="{{ url('farm/js/main.js') }}"></script>
    <script src="{{ asset('js/leaflet.js') }}"></script>
    @yield('custom')
    @stack('footer')
    @yield('footer')

  </body>

</html>


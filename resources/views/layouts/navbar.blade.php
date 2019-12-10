  <!-- top navigation -->
  <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
          @endif

          @else
          <li class="nav-item dropdown">
            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              <img src="images/img.jpg" alt="">@yield('akun')
              <span class=" fa fa-chevron-down"> {{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li><a href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"><i class="fa fa-sign-out pull-right">
                </i>{{ __('Logout') }}</a></li>
            </ul>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </li>
        @if (Auth::user()->hasAnyRole('dokter'))
                  <li>
                    <a href="{{ url('/PanggilDokter') }}" class="nav-link">Panggil Dokter</a>  
                  </li>
                  @endif
  
                  @if (Auth::user()->hasAnyRole('peternak'))
                  <li>
                      <a href="{{ url('Pemasukkan.index')}}" class="nav-link">
                          <i class="fa fa-usd"></i>
                          <span>Data Pemasukkan</span>
                      </a>
                  </li>    
                  <li>
                      <a href="{{ url('Pengeluaran.index')}}" class="nav-link">
                          <i class="fa fa-credit-card"></i>
                          <span>Data Pengeluaran</span>
                      </a>
                  </li>
                  <li>
                      <a href="{{ url('Produk.index')}}" class="nav-link">
                          <i class="fa fa-edit"></i>
                          <span>Data Produk</span>
                      </a>
                  </li>
                  <li>
                    <a href="{{ url('Keuangan.index')}}" class="nav-link">
                        <i class="fa fa-bar-chart"></i>
                        <span>Grafik</span>
                    </a>
                </li>
                  @endif
                  @if (Auth::user()->hasAnyRole('admin'))
                  <li>
                      <a href="{{ url('Pemasukkan.index')}}" class="nav-link">
                          <i class="fa fa-usd"></i>
                          <span>Data Pemasukkan</span>
                      </a>
                  </li>    
                  <li>
                      <a href="{{ url('Pengeluaran.index')}}" class="nav-link">
                          <i class="fa fa-credit-card"></i>
                          <span>Data Pengeluaran</span>
                      </a>
                  </li>
                  <li>
                      <a href="{{ url('Produk.index')}}" class="nav-link">
                          <i class="fa fa-edit"></i>
                          <span>Data Produk</span>
                      </a>
                  </li>
                  <li>
                    <a href="{{ url('Keuangan.index')}}" class="nav-link">
                        <i class="fa fa-bar-chart"></i>
                        <span>Grafik</span>
                    </a>
                </li>
                  @endif


        @endguest
        </ul>
      </nav>
    </div>
  </div>
  <!-- /top navigation -->
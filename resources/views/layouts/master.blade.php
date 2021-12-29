<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>{{ $title }} | SISATU</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  {{-- offline --}}
  <link rel="stylesheet" href="{{ asset('css/font-awesome/all.css') }}">

  <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="/site.webmanifest">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../node_modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="../node_modules/weathericons/css/weather-icons.min.css">
  <link rel="stylesheet" href="../node_modules/weathericons/css/weather-icons-wind.min.css">
  <link rel="stylesheet" href="../node_modules/summernote/dist/summernote-bs4.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href=" {{ asset('admin/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/css/components.css') }}">

    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('css/costumAdmin.css') }}">

    <!-- My JS -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/costumAuth.js') }}"></script>
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          {{-- <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
              <div class="search-header">
                Histories
              </div>
              <div class="search-item">
                <a href="#">How to hack NASA using CSS</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">Kodinger.com</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-item">
                <a href="#">#Stisla</a>
                <a href="#" class="search-close"><i class="fas fa-times"></i></a>
              </div>
              <div class="search-header">
                Result
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="../assets/img/products/product-3-50.png" alt="product">
                  oPhone S9 Limited Edition
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="../assets/img/products/product-2-50.png" alt="product">
                  Drone X2 New Gen-7
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <img class="mr-3 rounded" width="30" src="../assets/img/products/product-1-50.png" alt="product">
                  Headphone Blitz
                </a>
              </div>
              <div class="search-header">
                Projects
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-danger text-white mr-3">
                    <i class="fas fa-code"></i>
                  </div>
                  Stisla Admin Template
                </a>
              </div>
              <div class="search-item">
                <a href="#">
                  <div class="search-icon bg-primary text-white mr-3">
                    <i class="fas fa-laptop"></i>
                  </div>
                  Create a new Homepage Design
                </a>
              </div>
            </div>
          </div> --}}
        </form>

    @if (Auth::check())
        <ul class="navbar-nav navbar-right">
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="{{ asset('image/tut-wuri-handayani.png') }}" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">
                    Hi, {{ Auth::user()->name }}
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right mt-2">
                <div class="dropdown-title">
                @if (Auth::user()->role === 'kepsek')
                    You Are <br> <strong class="text-primary fw-bold">Kepala Sekolah</strong>
                @elseif (Auth::user()->role === 'ktu')
                    You Are <br> <strong class="text-primary fw-bold">Kepala Tata Usaha</strong>
                @else
                    You Are <strong class="text-primary fw-bold">{{ Auth::user()->role }}</strong>
                @endif
                </div>
                {{-- <a href="features-profile.html" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>
                <a href="features-activities.html" class="dropdown-item has-icon">
                    <i class="fas fa-bolt"></i> Activities
                </a>
                <a href="features-settings.html" class="dropdown-item has-icon">
                    <i class="fas fa-cog"></i> Settings --}}
                </a>
                <div class="dropdown-divider"></div>
                    <a class="dropdown-item has-icon text-danger" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i>{{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
            </div>
        </li>
        </ul>
    @endif
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand mt-4">
            <img src="{{ url('image/tut-wuri-handayani.png') }}" alt="" width="60">
            <p class="mt-3 fs-5 fw-bold ">Sistem Pelayanan</p>
            <p class="font-down-brand">Surat Menyurat Satu Pintu</p>
          </div>
          {{-- Sidebar Close --}}
          <div class="sidebar-brand sidebar-brand-sm mt-2 mb-4">
            <img src="{{ url('image/tut-wuri-handayani.png') }}" alt="" width="35">
          </div>
          {{-- end --}}

        @if (Auth::check() && Auth::user()->role === 'resepsionis')
          <!-- SibeBar Untuk Resepsionis -->
            <ul class="sidebar-menu mt-4">
                <li class="menu-header">Dashboard</li>
                <li class="{{ active_item('Dashboard.resepsionis') }}">
                <a href="{{ route('Dashboard.resepsionis') }}" class="nav-link"><i class="fas fa-home"></i></i><span>Home</span></a>
                </li>
                <li class="menu-header">More</li>
                <li class="{{ active_item('suratmasuk') }}">
                <a class="nav-link" href="{{ route('suratmasuk') }}"><i class="fas fa-envelope mt-1"></i> <span>Surat Masuk</span></a>
                </li>
                <li class="{{ active_item('legalisirmasuk') }}">
                <a class="nav-link" href="{{ route('legalisirmasuk') }}"><i class="far fa-sticky-note"></i><span>Legalisir</span></a>
                </li>
            </ul>
            <!-- END Resepsionis -->

        @elseif (Auth::check() && Auth::user()->role === 'staf')
            <!-- SibeBar Untuk Staf -->
            <ul class="sidebar-menu mt-4">
                <li class="menu-header">Dashboard</li>
                <li class="{{ active_item('Dashboard.resepsionis') }}">
                    <a href="{{ route('Dashboard.resepsionis') }}" class="nav-link"><i class="fas fa-home"></i></i><span>Home</span></a>
                </li>
                <li class="menu-header">Menu</li>
                <li class="{{ active_item('suratmasuk.staf') }}">
                    <a class="nav-link" href="{{ route('suratmasuk.staf') }}"><i class="fas fa-envelope mt-1"></i> <span>Surat Masuk</span></a>
                </li>
                <li class="{{ active_item('legalisirmasuk.staf') }}">
                    <a class="nav-link" href="{{ route('legalisirmasuk.staf') }}"><i class="far fa-sticky-note"></i><span>Legalisir</span></a>
                </li>
                <li class="{{ active_item('suratkeluar.index') }}">
                    <a class="nav-link" href="{{ route('suratkeluar.index') }}"><i class="fas fa-paper-plane ms-1"></i><span>Surat Keluar</span></a>
                </li>
                <li class="{{ active_item('legalisirkeluar.index') }}">
                    <a class="nav-link" href="{{ route('legalisirkeluar.index') }}"><i class="fas fa-share-square"></i><span>Legalisir Keluar</span></a>
                </li>
            </ul>
            <!-- END Staf -->
        @elseif (Auth::check() && Auth::user()->role === 'ktu')
            <!-- SibeBar Untuk Kepala Staf Tata Usaha -->
            <ul class="sidebar-menu mt-4">
                <li class="menu-header">Dashboard</li>
                    <li class="{{ active_item('Dashboard.resepsionis') }}">
                        <a href="{{ route('Dashboard.resepsionis') }}" class="nav-link"><i class="fas fa-home"></i></i><span>Home</span></a>
                    </li>
                <li class="menu-header">User</li>
                    <li class="{{ active_item('kelolapengguna.index') }}">
                        <a class="nav-link" href="{{ route('kelolapengguna.index') }}"><i class="fas fa-users"></i><span>Kelola Pengguna</span></a>
                    </li>
                <li class="menu-header">Menu</li>
                    <li class="{{ active_item('suratmasuk.staf') }}">
                        <a class="nav-link" href="{{ route('suratmasuk.staf') }}"><i class="fas fa-envelope mt-1"></i> <span>Surat Masuk</span></a>
                    </li>
                    <li class="{{ active_item('legalisirmasuk.staf') }}">
                        <a class="nav-link" href="{{ route('legalisirmasuk.staf') }}"><i class="far fa-sticky-note"></i><span>Legalisir</span></a>
                    </li>
                    <li class="{{ active_item('suratkelaur.index') }}">
                        <a class="nav-link" href="{{ route('suratkeluar.index') }}"><i class="fas fa-paper-plane ms-1"></i><span>Surat Keluar</span></a>
                    </li>
                    <li class="{{ active_item('legalisirkeluar.index') }}">
                        <a class="nav-link" href="{{ route('legalisirkeluar.index') }}"><i class="fas fa-share-square"></i><span>Legalisir Keluar</span></a>
                    </li>
            </ul>
            <!-- END Kepala Staf Tata Usaha -->
        @elseif (Auth::check() && Auth::user()->role === 'kepsek')
            <!-- SibeBar Untuk Kepala Sekolah -->
            <ul class="sidebar-menu mt-4">
                <li class="menu-header">Dashboard</li>
                    <li class="{{ active_item('Dashboard.resepsionis') }}">
                        <a href="{{ route('Dashboard.resepsionis') }}" class="nav-link"><i class="fas fa-home"></i></i><span>Home</span></a>
                    </li>
                <li class="menu-header">Menu</li>
                    <li class="{{ active_item('suratmasuk.staf') }}">
                        <a class="nav-link" href="{{ route('suratmasuk.staf') }}"><i class="fas fa-envelope mt-1"></i> <span>Surat Masuk</span></a>
                    </li>
                    <li class="{{ active_item('legalisirmasuk.staf') }}">
                        <a class="nav-link" href="{{ route('legalisirmasuk.staf') }}"><i class="far fa-sticky-note"></i><span>Legalisir</span></a>
                    </li>
                    <li class="{{ active_item('suratkelaur.index') }}">
                        <a class="nav-link" href="{{ route('suratkeluar.index') }}"><i class="fas fa-paper-plane ms-1"></i><span>Surat Keluar</span></a>
                    </li>
                    <li class="{{ active_item('legalisirkeluar.index') }}">
                        <a class="nav-link" href="{{ route('legalisirkeluar.index') }}"><i class="fas fa-share-square"></i><span>Legalisir Keluar</span></a>
                    </li>
            </ul>
            <!-- END Kepala Sekolah -->
        @else
        <!-- SideBar untuk Pengguna Umum -->
          <ul class="sidebar-menu mt-4">
              <li class="menu-header">Dashboard</li>
              <li class="{{ active_item('Dashboard') }}">
                <a href="{{ Route('Dashboard') }}" class="nav-link"><i class="fas fa-home"></i></i><span>Home</span></a>
              </li>
              <li class="menu-header">Menu</li>
              <li class="{{ active_item('pengajuanSurat') }}">
                <a class="nav-link" href="{{ Route('pengajuanSurat') }}"><i class="fas fa-envelope mt-1"></i> <span>Pengajuan Surat</span></a>
              </li>
              <li class="{{ active_item('pengajuanLegalisir') }}">
                <a class="nav-link" href="{{ Route('pengajuanLegalisir') }}"><i class="far fa-sticky-note"></i><span>Pengajuan Legalisir</span></a>
              </li>
              <li class="{{ active_item('pengumuman') }}">
                <a class="nav-link" href="{{ Route('pengumuman') }}"><i class="fas fa-bullhorn mt-1"></i> <span>Pengumuman</span></a>
              </li>
          </ul>
        <!-- END Pengguna Umum -->
        @endif
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        {{-- @include('pengguna.home') --}}
        @yield('content')
      </div>

      <x-footer></x-footer>
    </div>
  </div>


  <!-- My JS -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{ asset('admin/js/stisla.js') }}"></script>

  <!-- JS Libraies -->
  <script src="../node_modules/simpleweather/jquery.simpleWeather.min.js"></script>
  <script src="../node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="../node_modules/jqvmap/dist/jquery.vmap.min.js"></script>
  <script src="../node_modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="../node_modules/summernote/dist/summernote-bs4.js"></script>
  <script src="../node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>


  <!-- Template JS File -->
  <script src=" {{ asset('admin/js/scripts.js') }}"></script>
  <script src="{{ asset('admin/js/costum.js') }}"></script>

  <!-- Page Specific JS File -->
  <script src="{{ asset('admin/js/page/forms-advanced-forms.js') }}"></script>

  <!-- Page Specific JS File -->
  <script src="{{ asset('admin/js/page/index-0.js') }}"></script>

  <!-- Modal  -->
  <script src="{{ asset('admin/js/page/bootstrap-modal.js') }}"></script>

  <!-- Sweet Alert js-->
   <script src="{{ asset('admin/js/page/modules-sweetalert.js') }}"></script>
   <script src="{{ asset('js/sweetalert.js') }}"></script>
   {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
</body>
</html>

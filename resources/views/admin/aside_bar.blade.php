
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('body')}}" class="brand-link">
      <img src="{{asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('admin/dist/img/profile.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Zahid Hassan</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          {{-- <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          
          
          <li class="nav-item">
            <a href="demo_form.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Demo form
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li> --}}

          <li class="nav-item">
            <a href="/team" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Team List
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/blog" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Blog News List
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/slider" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               Slider List
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/brand" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               Brand List
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/service" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               Service List
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/feature" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               Feature List
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/featureBlock" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               Feature Block
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/subscribe" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               Subscribe List
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          
          {{-- <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Log Out
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li> --}}
          <div>
            <div id="app">
              <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                  <div class="container">
                      <a class="navbar-brand" href="{{ url('/') }}">
                          {{ config('app.name', 'Laravel') }}
                      </a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                          <span class="navbar-toggler-icon"></span>
                      </button>
      
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <!-- Left Side Of Navbar -->
                          <ul class="navbar-nav me-auto">
      
                          </ul>
      
                          <!-- Right Side Of Navbar -->
                          <ul class="navbar-nav ms-auto">
                              <!-- Authentication Links -->
                              @guest
                                  @if (Route::has('login'))
                                      <li class="nav-item">
                                          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                      </li>
                                  @endif
      
                                  @if (Route::has('register'))
                                      <li class="nav-item">
                                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                      </li>
                                  @endif
                              @else
                                  <li class="nav-item dropdown">
                                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                          {{ Auth::user()->name }}
                                      </a>
      
                                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item" href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();">
                                              {{ __('Logout') }}
                                          </a>
      
                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                              @csrf
                                          </form>
                                      </div>
                                  </li>
                              @endguest
                          </ul>
                      </div>
                  </div>
              </nav>
      
              <main class="py-4">
                  @yield('content')
              </main>
          </div>
          </div>





          </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a href="" class="nav-link" data-toggle="dropdown"> 
              @if(Auth::check())
                {{request()->user()->nama}}
              @else
                Silahkan Login !
              @endif
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <a href="#" class="dropdown-item"><i class="fas fa-user"></i> Profile</a>
              <a href="#" class="dropdown-item"><i class="fas fa-cog"></i> Setting</a>
              <a href="{{url('logout')}}" class="dropdown-item"><i class="fas fa-sign-out"></i> Logout</a>
              <div class="dropdown-divider">
              </div>
            </div>
        </li>
    </ul>
  </nav
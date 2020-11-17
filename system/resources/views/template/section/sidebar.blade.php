@php
  function checkRouteActive($route){
  if(Route:: current() == $route) return 'active';
}
@endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="" alt="" class=""
           style="opacity: .8">
      @if(Auth::check())
        {{request()->user()->nama}}
      @else
        Silahkan Login !
      @endif
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="">
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Beranda
              </p>
            </a>
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="">
              </div>
            </div>
              <li class="nav-item">
                <a href="{{url('admin/produk')}}" class="nav-link">
                 <i class="nav-icon fas fa-th" aria-hidden="true"></i>
                  <p>Produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>Kategori</p>
                </a>
              </li>
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="">
              </div>
            </div>
              <li class="nav-item">
                <a href="{{url('admin/user')}}" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>User</p>
                </a>
              </li>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
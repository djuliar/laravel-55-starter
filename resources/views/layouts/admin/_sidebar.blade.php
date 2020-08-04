<aside class="main-sidebar sidebar-light-primary elevation-1">
    <a href="{{ url('/admin') }}" class="brand-link navbar-white text-center p-2">
        <img src="{{ asset('img/logo.png') }}" alt="{{ config('app.name') }}" height="40">
    </a>

    <div class="sidebar os-theme-light os-host-overflow">
        <div class="user-panel mt-2 pb-2 mb-2 d-flex">
            <div class="image">
              <img src="{{ asset('img/users/'.Auth::user()->avatar) }}" class="img-circle" alt=" ">
            </div>
            <div class="info">
              <span>{{ Auth::user()->name }}</span>
            </div>
            <div class="info ml-auto">
                <a class="small btn btn-link btn-xs" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    <i class="icon-logout"></i> Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar nav-flat flex-column nav-child-indent text-sm" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ url('/admin') }}" class="nav-link{{ $data['npage'] == 0 ? ' active' : '' }}">
                        <i class="nav-icon icon-speedometer"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-header font-weight-bold text-muted">DATA MASTER</li>
                <li class="nav-item">
                    <a href="{{ url('/admin/#') }}" class="nav-link{{ $data['npage'] == 1 ? ' active' : '' }}">
                        <i class="nav-icon icon-cup"></i>
                        <p>Link Menu</p>
                    </a>
                </li>
                <li class="nav-item has-treeview{{ $data['npage'] == 2 || $data['npage'] == 3 ? ' menu-open' : '' }}">
                    <a href="#" class="nav-link{{ $data['npage'] == 2 || $data['npage'] == 3 ? ' active' : '' }}">
                        <i class="nav-icon icon-folder"></i>
                        <p>Tree View<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('/admin/#') }}" class="nav-link{{ $data['npage'] == 2 ? ' active' : '' }}">
                                <i class="icon-tag nav-icon"></i>
                                <p>Link Menu</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header font-weight-bold text-muted">KONFIGURASI</li>
                <li class="nav-item has-treeview{{ $data['npage'] == 9 ? ' menu-open' : '' }}">
                    <a href="#" class="nav-link{{ $data['npage'] == 9 ? ' active' : '' }}">
                        <i class="nav-icon icon-settings"></i>
                        <p>Konfigurasi<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                        <li class="nav-item">
                            <a href="{{ url('/admin/user') }}" class="nav-link{{ $data['npage'] == 9 ? ' active' : '' }}">
                                <i class="icon-user-follow nav-icon"></i>
                                <p>Data Pengguna</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            
          @if(Auth::user()->role === "Admin")
          <li class="nav-item menu-open">
            <a href="{{route('admin')}}" class="nav-link @if($page == 'admin') active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               Administrateur
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{route('getmeteo')}}" class="nav-link @if($page == 'getmeteo') active @endif">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               Météorologue
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('meteo')}}" class="nav-link @if($page == 'meteo') active @endif">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Technicien
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          @endif

          @if(Auth::user()->role === "Technicien")
          <li class="nav-item">
            <a href="{{route('technicien')}}" class="nav-link  @if($page == 'technicien') active @endif">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Technicien
              </p>
            </a>
          </li>
          @endif

          @if(Auth::user()->role === "Météorologue")
          <li class="nav-item">
            <a href="{{route('meteo')}}" class="nav-link @if($page == 'meteo') active @endif">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Météorologue
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>

          @endif
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

              <i class="nav-icon fas fa-copy"></i>
              <p>
                Déconnexion
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>



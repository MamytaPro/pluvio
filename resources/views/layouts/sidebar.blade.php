 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->

    <div class="sidebar">
      <!-- Sidebar Menu -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image mt-2">
          <img src="{{asset('assets/dist/img/avatarP.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="info">
          <a class="nav-link" href="#" role="button">
            <h6> {{ Auth::user()->prenom }} {{Auth::user()->nom}}</h6>
          </a>
        </div>
      </div>
      <nav class="mt-2" >
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            
          @if(Auth::user()->role === "Admin")
          <li class="nav-item">
            <a href="{{route('admin')}}" class="nav-link @if(isset($page) && $page == 'admin') active @endif">
              <i class="fas fa-cloud-rain"></i>
              <p>
               Acceuil
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('getmeteo')}}" class="nav-link @if(isset($page) && $page == 'getmeteo') active @endif">
              <i class="fas fa-cloud-rain"></i>
              <p>
               Météorologue
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('meteo')}}" class="nav-link @if(isset($page) && $page == 'meteo') active @endif">
              <i class="fas fa-cloud-rain"></i>
              <p>
                Technicien
                </p>
            </a>
          </li>
          <li class="nav-item menu open">
            <a href="#" class="nav-link @if(isset($page) && $page == 'station') active @endif">
              <i class="fas fa-cloud-rain"></i>
              <p>
                Stations
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav item">
                <a href="{{route('station')}}" class="nav-link @if(isset($page) && $page == 'station') active @endif">
                <i class="ion ion-clipboard mr-1"></i>
                  <p>
                    Liste des Stations
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('localisation')}}" class="nav-link">
                <i class="ion ion-location"></i>
                  <p>
                    Localisation
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu open">
            <a href="#" class="nav-link @if(isset($page) && $page == 'releve') active @endif">
            <i class="fas fa-cloud-rain"></i>
              <p>
                Relevés
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('releve')}}" class="nav-link @if(isset($page) && $page == 'releve') active @endif">
                <i class="ion ion-clipboard mr-1"></i>
                  <p>
                    Liste des relevés
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('graphic')}}" class="nav-link @if(isset($page) && $page == 'graphic') active @endif">
                  <i class="fas fa-chart-bar"></i>
                  <p>
                    Graphiques
                  </p>
                </a>
              </li>
            </ul>
          </li>
          @endif

          @if(Auth::user()->role === "Technicien")
          <li class="nav-item">
            <a href="{{route('technicien')}}" class="nav-link  @if(isset($page) && $page == 'technicien') active @endif">
              <i class="fas fa-cloud-rain"></i>
              <p>
                Acceuil
              </p>
            </a>
          </li>
          <li class="nav-item menu open">
            <a href="#" class="nav-link @if(isset($page) && $page == 'releve') active @endif">
            <i class="ion ion-clipboard"></i>
              <p>
                Relevés
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('releve')}}" class="nav-link @if(isset($page) && $page == 'releve') active @endif">
                <i class="ion ion-clipboard mr-1"></i>
                  <p>
                    Liste des relevés
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('graphic')}}" class="nav-link @if(isset($page) && $page == 'graphic') active @endif">
                  <i class="fas fa-chart-bar"></i>
                  <p>
                    Graphiques
                  </p>
                </a>
              </li>
            </ul>
          </li>
          @endif

          @if(Auth::user()->role === "Météorologue")
          <li class="nav-item">
            <a href="{{route('acceuil')}}" class="nav-link @if(isset($page) && $page == 'acceuil') active @endif">
              <i class="fas fa-cloud-rain"></i>
              <p>
               Acceuil
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('meteo')}}" class="nav-link @if(isset($page) && $page == 'meteo') active @endif">
              <i class="fas fa-cloud-rain"></i>
              <p>
                Technicien
              </p>
            </a>
          </li>
          <li class="nav-item menu open">
            <a href="#" class="nav-link @if(isset($page) && $page == 'station') active @endif">
              <i class="fas fa-cloud-rain"></i>
              <p>
                Stations
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav item">
                <a href="{{route('station')}}" class="nav-link @if(isset($page) && $page == 'station') active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Liste des Stations
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('localisation')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Localisation
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('releve')}}" class="nav-link @if(isset($page) && $page == 'releve') active @endif">
              <i class="fas fa-cloud-rain"></i>
              <p>
                Relevés
              </p>
            </a>
          </li>
          @endif
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i>
              <p>
                Déconnexion
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



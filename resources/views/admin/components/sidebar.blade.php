<!-- start navigation -->
<nav class="navbar no-margin-bottom bootsnav alt-font bg-white sidebar-nav sidebar-nav-style-1 navbar-expand-lg">
  <!-- start logo -->
  <div class="col-12 sidenav-header">
      <div class="logo-holder">
          <a href={{ route('admin') }} class="display-inline-block logo big-logo"><img alt="SinSis" src={{ asset('images/logos/logo-sinsis.png') }} data-rjs={{ asset('images/logos/logo-sinsis.png') }} /></a>
          <a href={{ route('home') }} class="display-inline-block logo display-none"><img alt="SinSis" src={{ asset('images/logos/logo-sinsis-mini.png') }} data-rjs={{ asset('images/logos/logo-sinsis-mini.png') }} /></a>
      </div>
      <button class="navbar-toggler mobile-toggle" type="button" id="mobileToggleSidenav">
        <span></span>
        <span></span>
        <span></span>
    </button>
      {{-- <form class="navbar-form no-padding search-box w-100" role="search">
        <div class="input-group add-on">
            <input class="form-control" placeholder="Enter your keywords..." name="srch-term" id="srch-term" type="text">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </form> --}}
      <!-- end logo -->      
  </div>
  <div class="col-12 px-0">
      <div id="navbar-menu" class="collapse navbar-collapse no-padding">
          <ul class="nav navbar-nav navbar-left-sidebar font-weight-500">
            <li class="dropdown">
                <a href={{ route('logout') }}>{{ Auth::user()->name }} <span class="text-extra-small">(logout)</span></a>
            </li>
              <li class="dropdown">
                  <a href={{ route('projects') }} title="Proyectos" data-toggle="dropdown">Proyectos<i class="fas fa-angle-right pull-right"></i></a>
                  <ul class="dropdown-menu second-level">
                      <li class="dropdown">
                          <a href={{ route('create-project') }} title="Projectos" data-toggle="dropdown">Nuevo</i></a>
                      </li>
                      @foreach ($projects as $project)
                        <li class="dropdown">
                            <a href="{{ route('set-project-view',$project->slug) }}" title="Projectos" data-toggle="dropdown">{{ $project->name }}</i></a>                          
                        </li>
                      @endforeach
                                        
                  </ul>
              </li>

            <li class="dropdown">
                    <a href={{ route('user') }} title="Proyectos" data-toggle="dropdown">Usuarios<i class="fas fa-angle-right pull-right"></i></a>
                <ul class="dropdown-menu second-level">
                    <li class="dropdown">
                          <a href={{ route('create-user') }} title="Projectos" data-toggle="dropdown">Nuevo</i></a>                         
                    </li>                      
                </ul>
            </li>
              <li class="dropdown">
                  <a data-toggle="dropdown" href="#" title="Empresas">Empresas <i class="fas fa-angle-right"></i></a>
                  <ul class="dropdown-menu second-level">
                    <li class="dropdown">
                        <a href="#" title="About" data-toggle="dropdown">Nuevo</a>
                    </li>    
                      @foreach ($side_enterprises as $side_enterprise)
                        <li class="dropdown">
                            <a href="#" title={{ $side_enterprise->name }} data-toggle="dropdown">{{ $side_enterprise->name }}</a>
                        </li>    
                      @endforeach                  
                  </ul>
              </li>
              {{-- <li class="dropdown">
                    <a href={{ route('diagnostics') }} title="Proyectos" data-toggle="dropdown">Diagnostico<i class="fas fa-angle-right pull-right"></i></a>
                  <ul class="dropdown-menu second-level">
                  <li class="dropdown">
                          <a href={{ route('create-diagnostics') }} title="Projectos" data-toggle="dropdown">Nuevo</i></a>                         
                      </li>
                  </ul>
              </li>


              <li class="dropdown">
                    <a href={{ route('proposals') }} title="Proyectos" data-toggle="dropdown">Propuesta<i class="fas fa-angle-right pull-right"></i></a>
                  <ul class="dropdown-menu second-level">
                  <li class="dropdown">
                          <a href={{ route('create-proposals') }} title="Projectos" data-toggle="dropdown">Nuevo</i></a>                         
                      </li>
                  </ul>
              </li>
              <li> --}}
                  <div class="side-left-menu-close close-side"></div>
              </li>
          </ul>
      </div>
  </div>
  <div class="col-12 position-absolute top-auto bottom-0 left-0 width-100 padding-20px-bottom sm-padding-15px-bottom">
      <div class="footer-holder">                   
          <div class="text-medium-gray text-extra-small border-top border-color-extra-light-gray padding-twelve-top sm-padding-15px-top">&COPY; 2020 SinSis. Todos los Derechos Reservados</div>
      </div>
  </div>
</nav>
<!-- end navigation --> 
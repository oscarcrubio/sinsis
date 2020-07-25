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
                      @if (count(@$projects) > 0 )
                      @foreach ($projects as $project)
                        <li class="dropdown">
                            <a href="#" title="Projectos" data-toggle="dropdown">{{ $project->name }}</i></a>                          
                        </li>
                      @endforeach
                      @else
                      <li class="dropdown">
                        <a title="Projectos" data-toggle="dropdown">No hay proyectos activos</i></a>                          
                    </li>
                      @endif                      
                  </ul>
              </li>

              <li class="dropdown">
                    <a href={{ route('user') }} title="Proyectos" data-toggle="dropdown">Usuarios<i class="fas fa-angle-right pull-right"></i></a>
                  <ul class="dropdown-menu second-level">
                  <li class="dropdown">
                          <a href={{ route('create-user') }} title="Projectos" data-toggle="dropdown">Nuevo</i></a>                         
                      </li>
                      <li class="dropdown">
                          <a href="#" title="Services" data-toggle="dropdown">Services</a>                         
                      </li>
                      <li class="dropdown">
                          <a href="#" title="Contact" data-toggle="dropdown">Contact</a>                          
                      </li>
                      <li class="dropdown">
                          <a href="#" title="Team" data-toggle="dropdown">Team </a>
                      </li>
                      <li class="dropdown">
                          <a href="#" title="Additional" data-toggle="dropdown">Additional</a>
                      </li>
                  </ul>
              </li>

              <li class="dropdown">
                  <a data-toggle="dropdown" href="#" title="Empresas">Empresas <i class="fas fa-angle-right"></i></a>
                  <ul class="dropdown-menu second-level">
                      <li class="dropdown">
                          <a href="#" title="About" data-toggle="dropdown">About</a>                          
                      </li>
                      <li class="dropdown">
                          <a href="#" title="Services" data-toggle="dropdown">Services</a>                         
                      </li>
                      <li class="dropdown">
                          <a href="#" title="Contact" data-toggle="dropdown">Contact</a>                          
                      </li>
                      <li class="dropdown">
                          <a href="#" title="Team" data-toggle="dropdown">Team </a>
                      </li>
                      <li class="dropdown">
                          <a href="#" title="Additional" data-toggle="dropdown">Additional</a>
                      </li>
                  </ul>
              </li>
              <li class="dropdown">
                <a href={{ route('enterview') }} title="Proyectos" data-toggle="dropdown">Entrevistas<i class="fas fa-angle-right pull-right"></i></a>
                  <ul class="dropdown-menu second-level">
                  <li class="dropdown">
                          <a href={{ route('create-enterview') }} title="Projectos" data-toggle="dropdown">Nuevo</i></a>                         
                      </li>
                      <li class="dropdown">
                          <a href="#" title="Services" data-toggle="dropdown">Services</a>                         
                      </li>
                      <li class="dropdown">
                          <a href="#" title="Contact" data-toggle="dropdown">Contact</a>                          
                      </li>
                      <li class="dropdown">
                          <a href="#" title="Team" data-toggle="dropdown">Team </a>
                      </li>
                      <li class="dropdown">
                          <a href="#" title="Additional" data-toggle="dropdown">Additional</a>
                      </li>
                 </ul>
                </li>

              <li class="dropdown">
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





              {{-- <li class="dropdown">
                  <a data-toggle="dropdown" href="#" title="Features">Features <i class="fas fa-angle-right"></i></a>
                  <ul class="dropdown-menu second-level">
                      <li class="dropdown">
                          <a href="#" title="Header Styles" data-toggle="dropdown">Header Styles <i class="fas fa-angle-right"></i></a>
                          <ul class="dropdown-menu third-level">
                              <li><a href="transparent-header.html">Transparent header</a></li>
                              <li><a href="white-header.html">White header</a></li>
                              <li><a href="dark-header.html">Dark header</a></li>
                              <li><a href="header-with-top-bar.html">Header with top bar</a></li>
                              <li><a href="header-with-push.html">Header with push</a></li>
                              <li><a href="center-navigation.html">Center navigation</a></li>
                              <li><a href="center-logo.html">Center logo</a></li>
                              <li><a href="top-logo.html">Top logo</a></li>
                              <li><a href="one-page-navigation.html">One page navigation</a></li>
                              <li><a href="hamburger-menu.html">Hamburger menu</a></li>
                              <li><a href="hamburger-menu-modern.html">Hamburger menu modern</a></li>
                              <li><a href="hamburger-menu-half.html">Hamburger menu half</a></li>
                              <li><a href="left-menu-classic.html">Left menu classic</a></li>
                              <li><a href="left-menu-modern.html">Left menu modern</a></li>
                          </ul>
                      </li>
                      <li class="dropdown">
                          <a href="#" title="Footer" data-toggle="dropdown">Footer <i class="fas fa-angle-right"></i></a>
                          <ul class="dropdown-menu third-level">
                              <li><a href="footer-standard.html">Footer standard</a></li>
                              <li><a href="footer-standard-dark.html">Footer standard dark</a></li>
                              <li><a href="footer-classic.html">Footer classic</a></li>
                              <li><a href="footer-classic-dark.html">Footer classic dark</a></li>
                              <li><a href="footer-clean.html">Footer clean</a></li>
                              <li><a href="footer-clean-dark.html">Footer clean dark</a></li>
                              <li><a href="footer-modern.html">Footer modern</a></li>
                              <li><a href="footer-modern-dark.html">Footer modern dark</a></li>
                              <li><a href="footer-center-logo.html">Footer center logo </a></li>
                              <li><a href="footer-center-logo-dark.html">Footer center logo dark</a></li>
                              <li><a href="footer-strip.html">Footer strip</a></li>
                              <li><a href="footer-strip-dark.html">Footer strip dark</a></li>
                              <li><a href="footer-center-logo-02.html">Footer center logo 02</a></li>
                              <li><a href="footer-center-logo-02-dark.html">Footer center logo 02 dark</a></li>
                              <li><a href="footer-clean-modern.html">footer clean modern</a></li>
                              <li><a href="footer-clean-modern-dark.html">footer clean modern dark</a></li>
                          </ul>
                      </li>
                      <li class="dropdown">
                          <a href="#" title="Page Title" data-toggle="dropdown">Page Title <i class="fas fa-angle-right"></i></a>
                          <ul class="dropdown-menu third-level">
                              <li><a href="page-title-left-alignment.html">Left alignment</a></li>
                              <li><a href="page-title-right-alignment.html">Right alignment</a></li>
                              <li><a href="page-title-center-alignment.html">Center alignment</a></li>
                              <li><a href="page-title-dark-style.html">Dark style</a></li>
                              <li><a href="page-title-big-typography.html">Big typography</a></li>
                              <li><a href="page-title-parallax-image-background.html">Parallax image background</a></li>
                              <li><a href="page-title-background-breadcrumbs.html">Image after breadcrumbs</a></li>
                              <li><a href="page-title-gallery-background.html">Gallery background</a></li>
                              <li><a href="page-title-background-video.html">Background video</a></li>
                              <li><a href="page-title-mini-version.html">Mini version</a></li>
                          </ul>
                      </li>
                      <li class="dropdown">
                          <a href="#" title="Single image lightbox" data-toggle="dropdown">Single Image Lightbox <i class="fas fa-angle-right"></i></a>
                          <ul class="dropdown-menu third-level">
                              <li><a href="lightbox-gallery.html">Lightbox gallery</a></li>
                              <li><a href="zoom-gallery.html">Zoom gallery</a></li>
                              <li><a href="metro-gallery.html">metro gallery</a></li>
                              <li><a href="justified-gallery.html">justified gallery</a></li>
                              <li><a href="popup-with-form.html">Popup with form</a></li>
                              <li><a href="modal-popup.html">Modal popup</a></li>
                              <li><a href="open-youtube-video.html">Open youtube video</a></li>
                              <li><a href="open-vimeo-video.html">Open vimeo video</a></li>
                              <li><a href="open-google-map.html">Open google map</a></li>
                          </ul>
                      </li>
                  </ul>
              </li> --}}




              <li>
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
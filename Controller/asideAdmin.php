<?php
$objetoConsultas= new consultasAsideUsuarios;
//$resut=$objetoConsultas->listarUserAside();

    echo '<aside class="main-sidebar sidebar-dark-primary elevation-4" id="barra-m">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img
        src="../Assets/img/AdminLTELogo.png"
        alt="AdminLTE Logo"
        class="brand-image img-circle elevation-3"
        style="opacity: 0.8"
      />
      <span class="brand-text font-weight-light">UP DEPORT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img
            src="../Assets/img/user2-160x160.jpg"
            class="img-circle elevation-2"
            alt="User Image"
          />
        </div>
        <div class="info">';
         echo "<a> ismael</a>";
      echo'  
      </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input
            class="form-control form-control-sidebar"
            type="search"
            placeholder="Search"
            aria-label="Search"
          />
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2" id="menu-m">
        <ul
          class="nav nav-pills nav-sidebar flex-column"
          data-widget="treeview"
          role="menu"
          data-accordion="false"
        >
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../index.php" class="nav-link" id="menu-m">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inicio</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link" id="menu-m">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Estadisticas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a
                  href="pages/charts/chartjs.php"
                  id="menu-m"
                  class="nav-link"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a
                  href="pages/charts/flot.php"
                  id="menu-m"
                  class="nav-link"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mi Desarrollo General</p>
                </a>
              </li>
              <li class="nav-item">
                <a
                  href="pages/charts/inline.php"
                  id="menu-m"
                  class="nav-link"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link" id="menu-m">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a
                  href="simple.php"
                  id="menu-m"
                  class="nav-link"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a
                  href="data.php"
                  id="menu-m"
                  class="nav-link"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="pages/calendar.php" id="menu-m" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendario
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/gallery.php" id="menu-m" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>Gallery</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="#" id="menu-m" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Correo
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a
                  href="pages/mailbox/mailbox.php"
                  id="menu-m"
                  class="nav-link"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Entrada</p>
                </a>
              </li>
              <li class="nav-item">
                <a
                  href="pages/mailbox/compose.php"
                  id="menu-m"
                  class="nav-link"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Redactar mensaje</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" id="menu-m" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a
                  href="pages/examples/invoice.php"
                  id="menu-m"
                  class="nav-link"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Invoice</p>
                </a>
              </li>
              <li class="nav-item">
                <a
                  href="pages/examples/profile.php"
                  id="menu-m"
                  class="nav-link"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Perfil</p>
                </a>
              </li>
              <li class="nav-item">
                <a
                  href="pages/examples/e-commerce.php"
                  id="menu-m"
                  class="nav-link"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>E-commerce</p>
                </a>
              <li class="nav-item">
                <a
                  href="pages/examples/contacts.php"
                  id="menu-m"
                  class="nav-link"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contactos</p>
                </a>
              </li>
              <li class="nav-item">
                <a
                  href="pages/examples/faq.php"
                  id="menu-m"
                  class="nav-link"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>FAQ</p>
                </a>
              </li>
              <li class="nav-item">
                <a
                  href="pages/examples/contact-us.php"
                  id="menu-m"
                  class="nav-link"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact us</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" id="menu-m">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Extras
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link" id="menu-m">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Login & Register v1
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a
                      href="pages/examples/login.php"
                      id="menu-m"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon"></i>
                      <p>Login v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      href="pages/examples/register.php"
                      id="menu-m"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon"></i>
                      <p>Register v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      href="pages/examples/forgot-password.php"
                      class="nav-link"
                      id="menu-m"
                    >
                      <i class="far fa-circle nav-icon"></i>
                      <p>Forgot Password v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      href="pages/examples/recover-password.php"
                      class="nav-link"
                      id="menu-m"
                    >
                      <i class="far fa-circle nav-icon"></i>
                      <p>Recover Password v1</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item">
                <a
                  href="pages/examples/lockscreen.php"
                  class="nav-link"
                  id="menu-m"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lockscreen</p>
                </a>
              </li>

              <li class="nav-item">
                <a
                  href="pages/examples/404.php"
                  class="nav-link"
                  id="menu-m"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 404</p>
                </a>
              </li>
              <li class="nav-item">
                <a
                  href="pages/examples/500.php"
                  class="nav-link"
                  id="menu-m"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 500</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="pages/search/enhanced.php" class="nav-link" id="menu-m">
              <i class="nav-icon fas fa-search"></i>
              <p>
                Busqueda Avanzada
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    
    <!-- end live-chat -->
  </aside>'
?>

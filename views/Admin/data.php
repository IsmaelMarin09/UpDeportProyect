<?php 

require_once ("../../Model/conexion.php");

require_once ("../../Model/consutasAdmin.php");
require_once ("../../Controller/listarUsersAdmin.php");


?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../Assets/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../Assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../Assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../Assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../Assets/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../Assets/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../Assets/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../Assets/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" id="barra-m">
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
        <div class="info">
          <a href="#" class="d-block">Ismael Marin</a>
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
    <div id="live-chat">
      <header class="clearfix">
        <a href="#" class="chat-close">x</a>

        <h4>Mehmet Mert</h4>

        <span class="chat-message-counter">3</span>
      </header>

      <div class="chat">
        <div class="chat-history">
          <div class="chat-message clearfix">
            <img
              src="../Assets/img/user1-128x128.jpg"
              alt=""
              width="32"
              height="32"
            />

            <div class="chat-message-content clearfix">
              <span class="chat-time">13:35</span>

              <h5>John Doe</h5>

              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Error, explicabo quasi ratione odio dolorum harum.
              </p>
            </div>
            <!-- end chat-message-content -->
          </div>
          <!-- end chat-message -->

          <hr />

          <div class="chat-message clearfix">
            
            <img
              src="../Assets/img/user1-128x128.jpg"
              alt=""
              width="32"
              height="32"
            />

            <div class="chat-message-content clearfix">
              <span class="chat-time">13:37</span>

              <h5>Marco Biedermann</h5>

              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Blanditiis, nulla accusamus magni vel debitis numquam qui
                tempora rem voluptatem delectus!
              </p>
            </div>
            <!-- end chat-message-content -->
          </div>
          <!-- end chat-message -->

          <hr />

          <div class="chat-message clearfix">
            <img
              src="../Assets/img/alejandro.png"
              alt=""
              width="32"
              height="32"
            />

            <div class="chat-message-content clearfix">
              <span class="chat-time">13:38</span>

              <h5>John Doe</h5>

              <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
            </div>
            <!-- end chat-message-content -->
          </div>
          <!-- end chat-message -->

          <hr />
        </div>
        <!-- end chat-history -->

        <p class="chat-feedback">Yazıyor..</p>

        <form action="#" method="post">
          <fieldset>
            <input type="text" placeholder="Mesajınızı Yazın" autofocus />
            <input type="hidden" />
          </fieldset>
        </form>
      </div>
      <!-- end chat -->
    </div>
    <!-- end live-chat -->
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Home Admin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">


              <?php 
              cargarUsers()
              
              ?>
                <!-- <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                  </tr>
                 
                </table> -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../Assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../Assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../Assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../Assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../Assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../Assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../Assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../Assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../Assets/plugins/jszip/jszip.min.js"></script>
<script src="../Assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../Assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../Assets/plugins/datatables-buttons/js/buttons.php5.min.js"></script>
<script src="../Assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../Assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../Assets/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../Assets/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<!-- Chat ventana flotante -->
<script src="../Assets/js/asdasdasd.js"></script>
</body>
</html>

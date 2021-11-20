<?php 

require_once ("../../Model/conexion.php");
require_once ("../../Model/consultasAsideUsuarios.php");
require_once ("../../Model/consutasAdmin.php");
require_once ("../../Controller/listarUsersAdmin.php");
require_once ("../../Controller/profileAdmin.php");
require_once ("../../Controller/crearPublicaciones.php");
require_once ("../../Controller/cargarPublicaciones.php");


session_start();

?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Perfil</title>

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

  <!-- Main Sidebar Container -->
  <?php
    include'../../controller/asideAdmin.php'
  ?>
  
 


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>PERFIL</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Mi perfil</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
                <div class="container-fluid">
                  <div >
                    <!-- /.col -->
                    <div class="">
                      <div class="card">
                        <div class="card-header p-2">
                          <ul class="nav nav-pills">
                            <li class="nav-item ">
                              <a class="nav-link active" href="#timeline" data-toggle="tab"
                                >Perfil</a
                              >
                            </li>
                            <li class="nav-item">
                              <a
                                class="nav-link "
                                href="#activity"
                                data-toggle="tab"
                                >Muro</a
                              >
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#settings" data-toggle="tab"
                                >Mis Publicaciones</a
                              >
                            </li>
                            
                            
                          </ul>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                          <div class="tab-content">
                          <div class="tab-pane" id="settings">
                            <?php
                                      publicacionesCrear()
                                      
                            ?>

                          </div>
                            <div class="tab-pane" id="activity">
                              <!-- Post -->
                                <div class="post">
                                    <?php
                                              cargarPublicaciones()
                                    ?>
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane active" id="timeline">
                                      <?php
                                      profileAdmin()
                                      
                                      ?>
                               </div>

<!-- FIN PARTE PERFIL -->
<!-- /.tab-pane -->


<!-- /.tab-pane -->
</div>
<!-- /.tab-content -->
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
    
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="">UpDeport</a>.</strong>.
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
    <!-- AdminLTE App -->
    <script src="../Assets/js/adminlte.min.js"></script>
    <!-- jQuery Knob -->
    <script src="../Assets/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- Sparkline -->
    <script src="../Assets/plugins/sparklines/sparkline.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../Assets/js/demo.js"></script>

    <!-- SCRIPT PRIMERAS ESTADITICAS -->
    <!-- FLOT CHARTS -->
    <script src="../Assets/plugins/flot/jquery.flot.js"></script>
    <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
    <script src="../Assets/plugins/flAssets/plugins/jquery.flot.resize.js"></script>
    <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
    <script src="../Assets/plugins/flAssets/plugins/jquery.flot.pie.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../Assets/js/demo.js"></script>
</body>
</html>

<?php 

require_once ("../../Model/conexion.php");
require_once ("../../Model/consultasAsideUsuarios.php");
require_once ("../../Model/consutasAdmin.php");
require_once ("../../Controller/cargarConoserUsers.php");
require_once ("../../Model/seguridadAdmin.php");
session_start();

?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Conoce nuevas personas.</title>

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
            <h1>Personas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Conocer</li>
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
                <h3 class="card-title">Conoce otros deportistas con tus mismos gustos</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <section class="content">

<!-- Default box -->
<div class="card card-solid">
<div class="card-body d-flex" style="flex-wrap:wrap;" >
  <?php
  
  
  
  cargarConoserUsers();
  ?>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    <nav aria-label="Contacts Page Navigation">
      <ul class="pagination justify-content-center m-0">
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">4</a></li>
        <li class="page-item"><a class="page-link" href="#">5</a></li>
        <li class="page-item"><a class="page-link" href="#">6</a></li>
        <li class="page-item"><a class="page-link" href="#">7</a></li>
        <li class="page-item"><a class="page-link" href="#">8</a></li>
      </ul>
    </nav>
  </div>
  <!-- /.card-footer -->
</div>
<!-- /.card -->

</section>




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

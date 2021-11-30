<?php 

require_once ("../../Model/conexion.php");
require_once ("../../Model/consultasAsideUsuarios.php");
require_once ("../../Model/consutasAdmin.php");
require_once ("../../Controller/listarUsersAdmin.php");
require_once ("../../Controller/profileAdmin.php");
require_once ("../../Controller/crearPublicaciones.php");
require_once ("../../Controller/cargarPublicaciones.php");
require_once ("../../Controller/miPerfil.php");
require_once("../../Controller/cargarEstadisticasDefa.php");
require_once ("../../Model/seguridadAdmin.php");

session_start();

?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Perfil</title>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
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
  <style>
#chartdiv {
  width: 100%;
  height: 500px;
}
</style>
  
</head>
<body class="hold-transition sidebar-mini" style="overflow-x: hidden;">
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
                                >Mis Publicaciones</a>
                            </li>
                            
                            
                          </ul>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                          <div class="tab-content">
                          <div class="tab-pane" id="settings">
                            <div class="post">
                              <?php
                                    misPublicaciones();
                              ?>
                            </div>
                          </div>
                            <div class="tab-pane" style="border-top: 3px solid #007bff;" id="activity">
                              <!-- Post -->
                                <div class="post">
                                    <?php
                                              publicacionesCrear();
                                              cargarPublicaciones();
                                    ?>
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane active" id="timeline">
                                      <?php
                                      profileAdmin()
                                      
                                      ?>
                                      <!-- Inicio de estadisticas -->
                                      <div class="card">
                                          <div class="card-header">
                                            <h3 class="card-title">
                                              <i class="far fa-chart-bar"></i>
                                              Estadisticas personales
                                            </h3>

                                            <div class="card-tools">
                                              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                              </button>
                                              <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                <i class="fas fa-times"></i>
                                              </button>
                                            </div>
                                          </div>
                                          <!-- /.card-header -->
                                          <div class="card-body">
                                            <?php
                                            cargarEstadisticas();
                                            ?>
                                            <!-- /.row -->
                                          </div>
                                          <!-- /.card-body -->
                                         </div>
                                       
                                      
                                      

                                   


                                      <!-- Fin estadisticas -->
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
<script>
  function validar() {
        //obteniendo el valor que se puso en el campo text del formulario
        let miCampoTexto = document.getElementById("descripcion").value;
        let aviso        = document.getElementById("aviso")
        if (miCampoTexto.length == 0 || /^\s+$/.test(miCampoTexto)) {
          aviso.innerHTML = `Por favor llene el motivo de su solicitud.`
            return false;
        }
        return true;
    }
    function validar1() {
        //obteniendo el valor que se puso en el campo text del formulario
        let miCampoTexto = document.getElementById("descripcion").value;
        let aviso        = document.getElementById("aviso")
        if (miCampoTexto.length == 0 || /^\s+$/.test(miCampoTexto)) {
          aviso.innerHTML = `Por favor llene el motivo de su solicitud.`
            return false;
        }
        return true;
    }
       
      
        
    </script>
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

    <!-- ESTADITICAS -->
    <!-- Resources -->
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Chart code -->
<script>
am5.ready(function() {

// Create root element
// https://www.amcharts.com/docs/v5/getting-started/#Root_element
var root = am5.Root.new("chartdiv");


// Set themes
// https://www.amcharts.com/docs/v5/concepts/themes/
root.setThemes([
  am5themes_Animated.new(root)
]);


// Create chart
// https://www.amcharts.com/docs/v5/charts/percent-charts/sliced-chart/
var chart = root.container.children.push(am5percent.SlicedChart.new(root, {
  layout: root.verticalLayout
}));


// Create series
// https://www.amcharts.com/docs/v5/charts/percent-charts/sliced-chart/#Series
var series = chart.series.push(am5percent.PictorialStackedSeries.new(root, {
  alignLabels: true,
  orientation: "vertical",
  valueField: "value",
  categoryField: "category",
  svgPath: "M53.5,476c0,14,6.833,21,20.5,21s20.5-7,20.5-21V287h21v189c0,14,6.834,21,20.5,21 c13.667,0,20.5-7,20.5-21V154h10v116c0,7.334,2.5,12.667,7.5,16s10.167,3.333,15.5,0s8-8.667,8-16V145c0-13.334-4.5-23.667-13.5-31 s-21.5-11-37.5-11h-82c-15.333,0-27.833,3.333-37.5,10s-14.5,17-14.5,31v133c0,6,2.667,10.333,8,13s10.5,2.667,15.5,0s7.5-7,7.5-13 V154h10V476 M61.5,42.5c0,11.667,4.167,21.667,12.5,30S92.333,85,104,85s21.667-4.167,30-12.5S146.5,54,146.5,42 c0-11.335-4.167-21.168-12.5-29.5C125.667,4.167,115.667,0,104,0S82.333,4.167,74,12.5S61.5,30.833,61.5,42.5z"
}));

series.labelsContainer.set("width", 100);
series.ticks.template.set("location", 0.6);


// Set data
// https://www.amcharts.com/docs/v5/charts/percent-charts/sliced-chart/#Setting_data
series.data.setAll([
  { value: 8, category: "prueba" },
  { value: 6, category: "Two" },
  { value: 8, category: "Three" },
  { value: 2, category: "Four" },
  { value: 6, category: "Five" },
  { value: 2, category: "Six" },
  { value: 4, category: "Seven" }
]);


// Play initial series animation
// https://www.amcharts.com/docs/v5/concepts/animations/#Animation_of_series
chart.appear(1000, 100);

}); // end am5.ready()
</script>


</body>
</html>

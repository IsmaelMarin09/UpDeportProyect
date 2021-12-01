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
            <h1>Perfil</h1>
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

<!-- jQuery -->

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

    

    <!-- ESTADITICAS -->
  
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js" integrity="sha512-GMGzUEevhWh8Tc/njS0bDpwgxdCJLQBWG3Z2Ct+JGOpVnEmjvNx6ts4v6A2XJf1HOrtOsfhv3hBKpK9kE5z8AQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.esm.min.js" integrity="sha512-jZzg6pScDaxwQMIYigQwhPoykbqFDJ2HgeXkeMAQtKKEUbjAYZvtlSyTZdovoqKFbDG58S60zUdLlQDW6pwF7g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/helpers.esm.min.js" integrity="sha512-1b6IKdJzKvjUfXuATUJs0a4ti8sBZHY0DKZ1O1UCj3cpw+IEKxUwG2UtXNOjS5/JkqxQ2v5GUMFn62mtZyXAfA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script>
  $(function () {
    /* jQueryKnob */

    $('.knob').knob({
      /*change : function (value) {
       //console.log("change : " + value);
       },
       release : function (value) {
       console.log("release : " + value);
       },
       cancel : function () {
       console.log("cancel : " + this.value);
       },*/
      draw: function () {

        // "tron" case
        if (this.$.data('skin') == 'tron') {

          var a   = this.angle(this.cv)  // Angle
            ,
              sa  = this.startAngle          // Previous start angle
            ,
              sat = this.startAngle         // Start angle
            ,
              ea                            // Previous end angle
            ,
              eat = sat + a                 // End angle
            ,
              r   = true

          this.g.lineWidth = this.lineWidth

          this.o.cursor
          && (sat = eat - 0.3)
          && (eat = eat + 0.3)

          if (this.o.displayPrevious) {
            ea = this.startAngle + this.angle(this.value)
            this.o.cursor
            && (sa = ea - 0.3)
            && (ea = ea + 0.3)
            this.g.beginPath()
            this.g.strokeStyle = this.previousColor
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false)
            this.g.stroke()
          }

          this.g.beginPath()
          this.g.strokeStyle = r ? this.o.fgColor : this.fgColor
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false)
          this.g.stroke()

          this.g.lineWidth = 2
          this.g.beginPath()
          this.g.strokeStyle = this.o.fgColor
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false)
          this.g.stroke()

          return false
        }
      }
    })
    /* END JQUERY KNOB */

    //INITIALIZE SPARKLINE CHARTS
    var sparkline1 = new Sparkline($('#sparkline-1')[0], { width: 240, height: 70, lineColor: '#92c1dc', endColor: '#92c1dc' })
    var sparkline2 = new Sparkline($('#sparkline-2')[0], { width: 240, height: 70, lineColor: '#f56954', endColor: '#f56954' })
    var sparkline3 = new Sparkline($('#sparkline-3')[0], { width: 240, height: 70, lineColor: '#3af221', endColor: '#3af221' })

    sparkline1.draw([1000, 1200, 920, 927, 931, 1027, 819, 930, 1021])
    sparkline2.draw([515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921])
    sparkline3.draw([15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21])

  })

</script><script>
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

    <!-- Bootstrap 4 -->
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

    

    <!-- ESTADITICAS -->
  
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js" integrity="sha512-GMGzUEevhWh8Tc/njS0bDpwgxdCJLQBWG3Z2Ct+JGOpVnEmjvNx6ts4v6A2XJf1HOrtOsfhv3hBKpK9kE5z8AQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.esm.min.js" integrity="sha512-jZzg6pScDaxwQMIYigQwhPoykbqFDJ2HgeXkeMAQtKKEUbjAYZvtlSyTZdovoqKFbDG58S60zUdLlQDW6pwF7g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/helpers.esm.min.js" integrity="sha512-1b6IKdJzKvjUfXuATUJs0a4ti8sBZHY0DKZ1O1UCj3cpw+IEKxUwG2UtXNOjS5/JkqxQ2v5GUMFn62mtZyXAfA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script>
  $(function () {
    /* jQueryKnob */

    $('.knob').knob({
      /*change : function (value) {
       //console.log("change : " + value);
       },
       release : function (value) {
       console.log("release : " + value);
       },
       cancel : function () {
       console.log("cancel : " + this.value);
       },*/
      draw: function () {

        // "tron" case
        if (this.$.data('skin') == 'tron') {

          var a   = this.angle(this.cv)  // Angle
            ,
              sa  = this.startAngle          // Previous start angle
            ,
              sat = this.startAngle         // Start angle
            ,
              ea                            // Previous end angle
            ,
              eat = sat + a                 // End angle
            ,
              r   = true

          this.g.lineWidth = this.lineWidth

          this.o.cursor
          && (sat = eat - 0.3)
          && (eat = eat + 0.3)

          if (this.o.displayPrevious) {
            ea = this.startAngle + this.angle(this.value)
            this.o.cursor
            && (sa = ea - 0.3)
            && (ea = ea + 0.3)
            this.g.beginPath()
            this.g.strokeStyle = this.previousColor
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false)
            this.g.stroke()
          }

          this.g.beginPath()
          this.g.strokeStyle = r ? this.o.fgColor : this.fgColor
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false)
          this.g.stroke()

          this.g.lineWidth = 2
          this.g.beginPath()
          this.g.strokeStyle = this.o.fgColor
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false)
          this.g.stroke()

          return false
        }
      }
    })
    /* END JQUERY KNOB */

    //INITIALIZE SPARKLINE CHARTS
    var sparkline1 = new Sparkline($('#sparkline-1')[0], { width: 240, height: 70, lineColor: '#92c1dc', endColor: '#92c1dc' })
    var sparkline2 = new Sparkline($('#sparkline-2')[0], { width: 240, height: 70, lineColor: '#f56954', endColor: '#f56954' })
    var sparkline3 = new Sparkline($('#sparkline-3')[0], { width: 240, height: 70, lineColor: '#3af221', endColor: '#3af221' })

    sparkline1.draw([1000, 1200, 920, 927, 931, 1027, 819, 930, 1021])
    sparkline2.draw([515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921])
    sparkline3.draw([15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21])

  })

</script>


</body>
</html>

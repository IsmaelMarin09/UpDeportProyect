<?php
 
  if(!isset($_SESSION['unique_Id'])){
    header("location:../Extras/login.php");
  }else{
    $objetoConsultas= new consultasAsideUsuarios;
  $id=($_SESSION['unique_Id']);
  $result=$objetoConsultas->listarUserAside($id);

  }



foreach($result as $f){
  // BARRA NAV
  echo'<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="profile.php" class="nav-link">Inicio</a>
    </li>
  
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->
    <li class="nav-item">
            <a
              class="nav-link"
             
              href="../../Controller/logout.php?logout_id='.$f['img'].'"
              role="button"
            >
              <i class="fas fa-sign-out-alt"></i>Cerrar sesión
            </a>
            
          </li>
   
    <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li>
    
  </ul>
</nav>';
// ACA TERMINA LA PARTE DE NAV
// EMPIEZA LA SECCION DEL ASIDE

    echo '<aside class="main-sidebar sidebar-dark-primary elevation-4" id="barra-m">
    <!-- Brand Logo -->
    <a href="profile.php" class="brand-link">
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
            src="../Assets/img/perfil_img/'.$f['img'].'"
            class="img-circle elevation-2"
            alt="User Image"
          />
        </div>
        <div class="info">';
         echo "<a>" .$f['nombre']."</a>";
         // introduce el nombre y un poco m'as arriba la imagen del user
      echo'  
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
           <li class="nav-item">
            <a href="busqueda.php" class="nav-link" id="menu-m">
              <i class="nav-icon fas fa-search"></i>
              <p>
                Búsqueda 
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="profile.php" class="nav-link" id="menu-m">
                <i class="fas fa-user nav-icon"></i>
                <p>Mi perfil</p>
              </a>
            </li>
          </ul>
        </li>
          <li class="nav-item">
            <a href="#" class="nav-link" id="menu-m">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tablas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a
                  href="listaPublicaciones.php"
                  id="menu-m"
                  class="nav-link"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lista de publicaciones</p>
                </a>
              </li>
              <li class="nav-item">
                <a
                  href="data.php"
                  id="menu-m"
                  class="nav-link"
                >
                  <i class="far fa-circle nav-icon"></i>
                  <p>Información usuarios</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          <li class="nav-item">
                <a
                  href="crearUser.php"
                  id="menu-m"
                  class="nav-link"
                >
                  <i class="fas fa-user-plus nav-icon"></i>
                  <p>Crear user</p>
                </a>
              </li>
            <li class="nav-item">
              <a
                href="autorizarCuentas.php"
                id="menu-m"
                class="nav-link"
              >
                <i class="fas fa-circle  fa-user-check nav-icon"></i>
                <p>Autorizar hunters</p>
              </a>
            </li>
          <li class="nav-item">
                <a
                  href="controlDeSolicitudes.php"
                  id="menu-m"
                  class="nav-link"
                >
                  <i class="fas fa-user-cog nav-icon"></i>
                  <p>PQRS</p>
                </a>
              </li>
          <li class="nav-item">
          <li class="nav-item">
                <a
                  href="crearPublicacion.php"
                  id="menu-m"
                  class="nav-link"
                >
                  <i class="far fa-comments nav-icon"></i>
                  <p>Mensajes</p>
                </a>
              </li>
          <li class="nav-item">
         
          
        

          

          
          
          
          
          
          
          
          
          <li class="nav-item">
         
          <li class="nav-item">
            
          </li>
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    
    <!-- end live-chat -->
  </aside>';
  //termina el aside
};
?>

<?php 

  function profileAdmin(){
      if (isset($_GET['id_user2'])&& ($_GET['id_user2']!=$_SESSION['unique_Id'])) {
          $id=($_GET['id_user2']);
          $varseg="Seguir";
          $classDisplay=null;
          $classDisplayNoGet="none";
          $objetoConsultas= new consultasAdmin;
          $result3=$objetoConsultas-> verificacionSeg($_SESSION['unique_Id'],$id);
    
        
      }else{
          $id=($_SESSION['unique_Id']);
          $varseg="miPerfil";
          $classDisplay="none";
          $classDisplayNoGet=null;
          $result3=null;
      }
      $objetoConsultas= new consultasAdmin;
      $result=$objetoConsultas->selecUser($id,"users");
      $result2=$objetoConsultas->selecUser($id,"tablaprofile");
     


      foreach($result2 as $f2 ){
        foreach($result as $f ){
          echo '
          
                              <!-- The timeline -->
                              <div class=" timeline-inverse">
                                <!-- INICIO DE PERFIL -->
                                <div class="row ">
                                  <div class="col-md-6">
                                    <!-- Profile Image -->
                                    <div class="card card-primary card-outline">
                                      <div class="card-body box-profile">
                                        <div class="text-center">
                                          <img
                                            class="
                                              profile-user-img
                                              img-fluid img-circle
                                              
                                            "
                                            id="imgProfile"
                                            style="height:230px;width:230px;"
                                            src="../Assets/img/perfil_img/'.$f['img'].'"
                                            alt="User profile picture"
                                          />
                                        </div>

                                        <h3 class="profile-username text-center">
                                        '.$f['nombre'].'
                                        </h3>

                                        <p class="text-muted text-center">
                                        '.$f['rol'].'-'.$f['deporte'].'
                                        </p>

                                        <ul
                                          class="
                                            list-group list-group-unbordered
                                            mb-3
                                          "
                                        >
                                          <li class="list-group-item">';

                                          echo'  <a href="contactsSeguidores.php" style="display:'.$classDisplayNoGet.'">Seguidores</a>';
                                          echo " <a  style='display:".$classDisplay."' href='contactsSeguidores.php?id_user2=".$f2['unique_Id']."'>Seguidores"; 
                                          echo'  <a class="float-right"  id="aSeguidores"> '.$f2['seguidores'].'</a>
                                          </li>
                                          <li class="list-group-item">';
                                        
                                          echo " <a  style='display:".$classDisplay."' href='contactsSeguidos.php?id_user2=".$f2['unique_Id']."'>Seguidos";
                                          echo'  <a href="contactsSeguidos.php" style="display:'.$classDisplayNoGet.'">Seguidos</a>';
                                          
                                          echo '<a class="float-right"  id="aSeguidos"> '.$f2['seguidos'].'</a> 
                                          
                                          </li>
                                          
                                          
                                        </ul>
                                      
                                        <form action="../../Model/consultasBtnSeg.php" method="POST">
                                        <input name="id_Usr1" style="display:none;" value="'.$_SESSION['unique_Id'].'" >
                                        
                                        <input name="id_Usr2" style="display:none;" value="'.$id.'" >

                                        <button  class="btn btn-primary " style="display:'.$classDisplay.'">'.$result3.'</button>
                                        
                                        </form>
                                       
                                        
                                      </div>
                                      <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                  </div>
                                  <div class="card card-primary col-md-6">
                                    <div class="card-header" style="display:block">
                                      <h3 class="card-title">Sobre Mi</h3>
                                      <form action="profileMod.php" method="POST" style="position:relative; right:-60%;display:'.$classDisplayNoGet.';">
                                      <input name="id_Usr1" style="display:none;" value="'.$_SESSION['unique_Id'].'" >
                                      <button  class="btn btn-primary"  ><img src="../Assets/img/perfil_img/lapiz.png" alt="MDN"></button>    
                                      </form>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                      <strong
                                        ><i class="fas fa-book mr-1"></i>MI
                                        DESARROLLO</strong
                                      >

                                      <p class="text-muted">
                                      '.$f2['desarrollo'].'
                                      </p>

                                      <hr />

                                      <strong
                                        ><i class="fas fa-map-marker-alt mr-1"></i>me
                                        localizo</strong
                                      >

                                      <p class="text-muted"> '.$f['municipio'].'</p>

                                      <hr />

                                      <strong
                                        ><i class="fas fa-pencil-alt mr-1"></i
                                        >RECONOCIMIENTOS</strong
                                      >

                                      <p class="text-muted">
                                        <span class="tag tag-danger"
                                          > '.$f2['reconocimientos'].'</span
                                        >
                                    
                                      </p>

                                      <hr />

                                      <strong
                                        ><i class="far fa-file-alt mr-1"></i
                                        >DESCRIPCION</strong
                                      >

                                      <p class="text-muted">
                                      '.$f2['descripcion'].'
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </div>

                            
                           
        
                  
          ';

      
     }
  }
 } ;
?>
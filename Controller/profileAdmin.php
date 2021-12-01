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
                              <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
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
                                    <div class="card-header" style="display:block; padding: 0px 15px 30px 15px;">

                                    
                                      <h3 class="card-title" style="margin-top: 30px">Sobre mi</h3>
                                      <button type="button" class="bi bi-exclamation-triangle-fill" style="display:'.$classDisplay.'; color:#f5f4ff;margin: 27px 10px 14px 20px; background:  000; border: none;" data-bs-toggle="modal" data-bs-target="#exampleModal">Denunciar</button>
                                      <form action="profileMod.php" method="POST" style="position:relative; right: -39%; top: 25px; display:'.$classDisplayNoGet.';">
                                      <input name="id_Usr1" style="display:none;" value="'.$_SESSION['unique_Id'].'" >
                                      <button  style="color: #fff; border: none; background: #007bff;" class="bi bi-pencil-square">Modificar perfil</button>    
                                      </form>
                                    </div>

                                    
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                      <strong
                                        ><i class="fas fa-book mr-1"></i>Mi desarrollo
                                    </strong
                                      >

                                      <p class="text-muted">
                                      '.$f2['desarrollo'].'
                                      </p>

                                      <hr />

                                      <strong
                                        ><i class="fas fa-map-marker-alt mr-1"></i>Me
                                        localizo</strong
                                      >

                                      <p class="text-muted"> '.$f['municipio'].'</p>

                                      <hr />

                                      <strong
                                        ><i class="fas fa-pencil-alt mr-1"></i
                                        >Reconocimientos</strong
                                      >

                                      <p class="text-muted">
                                        <span class="tag tag-danger"
                                          > '.$f2['reconocimientos'].'</span
                                        >
                                    
                                      </p>

                                      <hr />

                                      <strong
                                        ><i class="far fa-file-alt mr-1"></i
                                        >Descripción</strong
                                      >

                                      <p class="text-muted">
                                      '.$f2['descripcion'].'
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Denunciar</h5>
                                    <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                  </div>
                                  <div class="modal-body">
                                  <form action="../../Controller/solicitudDenuncia.php" method="POST">
                                  <input name="id_Usr1" style="display:none;" value="'.$_SESSION['unique_Id'].'" >
                                  <input name="id_Usr3" style="display:none;" value="'.$f2['unique_Id'].'"   >                                
                                  <input name="id_Usr2" style="display:none;" value="'.$id.'" >
                                  <input name="tipo" style="display:none;" value="Persona" >
                                  <label>Por que deseas denunciar a este usuario ?</label>
                                  <textarea name="descripcion" id="descripcion"  rows="2" cols="55" placeholder="Escribe el motivo de tu solicitud"></textarea>
                                  <p id="aviso"></p>
                                  </div>
                                  <div class="modal-footer">
                                    <button id="btn-envio"  class="btn btn-primary">Enviar</button>
                                 
                                    
                                  </div>
                                  </form>
                                </div>
                              </div>
                            </div>               
        
                  
          ';

      
     }
  }
 } ;
?>
<?php
    function cargarConoserUsers(){
        
        $objetoConsultas= new consultasAdmin();
        
        $result=$objetoConsultas->listarUsers();
  
        if (!isset($result)) {        
          echo '<h2>Todavia no tienes seguidores.</h2>';
        }else{
            foreach ($result as $f) {    
                  
                $result2=$objetoConsultas->selecUser($f['unique_Id'],"tablaprofile");
                    foreach ($result2 as $f3){
                        if ($_SESSION['unique_Id']==$f['unique_Id']) {
                            continue;
                        }else {
                            echo' 
                        <div class="d-flex align-items-stretch flex-column col-md-4" style="max-width: 510px;">
                          <div class="card mb-3" style="max-width: 540px; margin-left: 3%; border: 1px solid #9d7832;">
                            <div class="row no-gutters" style="flex-wrap: inherit;">
                              <div class="col-md-4" style="max-width: 180px;">
                                <h3 style="text-align: center;" class="lead"><b>'.$f['rol'].'</b></h3>	
                                <img style="width: 184px; border-radius: 27px;" src="../Assets/img/perfil_img/'.$f['img'].'" alt="user-avatar">
                              </div>
                              <div class="col-md-8" style="max-width: 240px;">
                                <div class="card-body" style="padding: 20px;">
                                  <h5 class="card-title"><b>'.$f['nombre'].'</b></h5>
                                  <p class="card-text">Descripción: ' .$f3['descripcion'].'
                                  </p>
                                  <p style="margin-right: 10px;" class="card-text"><small class="text-muted">'.$f['municipio'].'</small><small class="text-muted float-right">'.$f['deporte'].'</small>
                                  </p>
                                    <div class="card-footer" style="width: 195px;
                                    margin: 0;
                                    border: 1px solid #9d7832;;
                                    border-radius: 20px;">
                                      <div class="text-right">
                                        ';echo "<a href='profile.php?id_user2=".$f['unique_Id']."'>Ver perfil";echo'
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                               
                    </div>
                  </div>
                </div>
              </div>';
                        
                        }
                        
                          
                        
                        
                    }                
                }
            }   
        }

?>
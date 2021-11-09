<?php
    function cargarSeguidos(){
        $objetoConsultas= new consultasAdmin();
        $id=$_SESSION['unique_Id'];
        $result=$objetoConsultas->listarSeguidores($id,"tablaseguimiento","unique_IdA");
        //verifica si sigo a alguien y si es asi carga sus unique_id
  
        if (!isset($result)) {        
          echo '<h2>Todavia no estás siguiendo a nadie</h2>';
        }else{
            foreach ($result as $f) {  
                //despues de cargados, busca en otra tabla su informacion        
                $result2=$objetoConsultas->listarSeguidores($f['unique_IdB'],"users","unique_Id");
                foreach ($result2 as $f2){
                    //tercera carga, busca en una ultima tabla, satos faltantes
                    $result2=$objetoConsultas->listarSeguidores($f['unique_IdB'],"tablaprofile","unique_Id");
                    foreach ($result2 as $f3){
                        echo' 
                        <div class=" d-flex align-items-stretch flex-column" style="max-width: 400px;" 
                        ;">
                            <div class="card bg-light d-flex flex-fill">
                            <div class="card-header text-muted border-bottom-0">
                            ' .$f2['rol'].' 
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                <div class="col-7">
                                    <h2 class="lead"><b>'.$f2['nombre'].'</b></h2>
                                    <p class="text-muted text-sm"><b>F Nacimiento </b>' .$f2['fNacimiento'].' </p>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span>' .$f2['municipio'].'</li>
                                    
                                    <li class="small"><span class="fa-li"><i class="fas fa-user nav-icon"></i></span> Descripcion: ' .$f3['descripcion'].'</li>
                                    </ul>
                                </div>
                                <div class="col-5 text-center">
                                    <img src="../Assets/img/perfil_img/'.$f2['img'].'" alt="user-avatar" class="img-circle img-fluid" style="width:140px;">
                                </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                <a href="#" class="btn btn-sm bg-teal">
                                    <i class="fas fa-comments"></i>
                                </a>';
                                echo " <a href='profile.php?id_user2=".$f2['unique_Id']."'>Ver Perfil";
                                   echo'
                                </a>
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
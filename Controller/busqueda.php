<?php
require_once('../Model/conexion.php');
require_once('../Model/consutasAdmin.php');


$buscar=$_POST["buscar"];
$objetoConsultas= new consultasAdmin();    
$result=$objetoConsultas->consultasBusqueda($buscar);
    

if (isset($result)) {  
    echo'
    <h5 class="card-tittle">Resultados encontrados:</h5>
    ';
    foreach ($result as $f1) {
        $result2=$objetoConsultas->selecUser($f1['unique_Id'],"tablaprofile");
        foreach ($result2 as $f3){
          
            echo' 
                        <div class=" d-flex align-items-stretch flex-column" style="max-width: 400px;" 
                        ;">
                            <div class="card bg-light d-flex flex-fill">
                            <div class="card-header text-muted border-bottom-0">
                            ' .$f1['rol'].' 
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                <div class="col-7">
                                    <h2 class="lead"><b>'.$f1['nombre'].'</b></h2>
                                    <p class="text-muted text-sm"><b>Deporte  </b>'  .$f1['deporte'].' </p>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                    <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span>' .$f1['municipio'].'</li>
                                    
                                    <li class="small"><span class="fa-li"><i class="fas fa-user nav-icon"></i></span> Descripcion: ' .$f3['descripcion'].'</li>
                                    </ul>
                                </div>
                                <div class="col-5 text-center">
                                    <img src="../Assets/img/perfil_img/'.$f1['img'].'" alt="user-avatar" class="img-circle img-fluid" style="width:140px;">
                                </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                ';
                                echo " <a href='profile.php?id_user2=".$f1['unique_Id']."'>Ver Perfil";
                                   echo'
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>';
        }
    }
}else{
    echo'
        <h5 class="card-tittle">Resultados No encontrados</h5>
        ';
}
   
?>

       









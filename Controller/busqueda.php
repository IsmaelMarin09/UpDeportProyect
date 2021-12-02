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
                            <div class="card-body pt-0" style="padding: 15px 9px 9px 9px!important; padding: 15px 9px 9px 9px!important;
                            border: 1px solid;
                            border-bottom: none;
                            border-color: #9d7832;
                        }">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="lead"><b>'.$f1['nombre'].'</b></h2>
                                        <p class="small"><span><i class="fas fa-user nav-icon"></i></span> Descripción: ' .$f3['descripcion'].'</p>
                                        <p class="small"><span><i class="fas fa-lg fa-building"></i></span>' .$f1['municipio'].'<span class="float-right"><img src="../Assets/img/juegos-olimpicos.png">'.$f1['deporte'].'</span></p>
                                    </div>
                                    
                                    <div class="col-5 text-center"><p>' .$f1['rol'].'</p> 
                                        <img src="../Assets/img/perfil_img/'.$f1['img'].'" alt="user-avatar" class="img-circle img-fluid" style="width:140px;">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer" style="border:1px solid;border-top: none;border-color: #9d7832;">
                                <div class="text-right">
                                ';
                                echo " <a href='profile.php?id_user2=".$f1['unique_Id']."'>Ver perfil";
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

       









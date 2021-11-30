<?php



function cargarPublicaciones(){
    if (isset($_GET['id_user2'])&& ($_GET['id_user2']!=$_SESSION['unique_Id'])) {
      $id=($_GET['id_user2']);
  }else{
      $id=($_SESSION['unique_Id']); 
  }
    $objetoConsulta=new consultasAdmin();
    $result=$objetoConsulta->listarPublicaciones();
    if (!isset($result)) {
        echo'<h1>no hay publicaciones</h1>';
    }else {
      $rResult=array_reverse($result);
        foreach ($rResult as $f) {
          $result3=$objetoConsulta-> verificacionLike($_SESSION['unique_Id'],$f['id']);
            $result2=$objetoConsulta->selecUser($f['unique_Id'],"users");
            if ($_SESSION['unique_Id']==$f['unique_Id']) {
              $classDisplayNoGet="none";
            }else {
              $classDisplayNoGet=null;
            }
            foreach ($result2 as $f2) {
            
           
        
        echo'<div style="border: solid 1px #e6e8eb;; padding: 15px; margin-bottom: 10px;">
        <div class="user-block"  >
            <img
            class="img-circle img-bordered-sm"
            src="../Assets/img/perfil_img/'.$f2['img'].'"
            alt="User Image"/>
                    <span class="username">
                        <a href="profile.php?id_user2='.$f2['unique_Id'].'">'.$f2['nombre'].'</a>
                    </span>
                    <button type="button" class="bi bi-exclamation-triangle-fill btn btn-danger float-right" style="margin-top:-15px; display:'.$classDisplayNoGet.';" data-bs-toggle="modal" data-bs-target="#exampleModal2"> Reportar </button>
                    <span class="description"
                    
                        >'.$f['f_Publicacion'].'</span>
</div>
<p>
  ';if ($f['des_Video']=='none') {
    
  }else {
    echo'Da click aqui para ver mi video: <a target="blank" href="'.$f['des_Video'].'">'.$f['des_Video'].'</a>';
    //echo'<iframe width="560" height="315" src="'.$f['des_Video'].'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
  }
  echo'
</p>

<p>
  ';if ($f['descripcion']=='none') {
    
  }else {
    echo $f['descripcion'];
  }
  echo'
</p>
<div class="container">  
<div class="row align-items-start">
  
    
                        ';
                        if ($f['img1']=='none') {
                          
                        }else {
                          echo'<div class="col" style="justify-content: center;
                          display: flex;">
                          <img id="fotosPublicaciones"
                          class="img-fluid"
                          src="../Assets/img/img_publicaciones/'.$f['img1'].'"alt="Photo"/></div>';
                        }
                        
                        echo'
                        
                        
                        ';
                        if ($f['img2']=='none') {
                          
                        }else {
                          echo'<div class="col" style="justify-content: center;
                          display: flex;">
                          <img id="fotosPublicaciones"
                          class="img-fluid"
                          src="../Assets/img/img_publicaciones/'.$f['img2'].'"alt="Photo"/></div>';
                        }
                        echo'
                       
                        
                        ';
                        if ($f['img3']=='none') {
                          
                        }else {
                          echo'<div class="col" style="justify-content: center;
                          display: flex;">
                          <img id="fotosPublicaciones"
                          class="img-fluid"
                          src="../Assets/img/img_publicaciones/'.$f['img3'].'"alt="Photo"/></div>';
                        }
                        
                        echo'
                        
  </div>

</div>  
<p>'.$f['likes'].' likes</p>
<p>
  <form action="../../Model/consultasBtnLikes.php" method="POST">
  <input name="id_Usr1" style="display:none;" value="'.$_SESSION['unique_Id'].'" >
  
  <input name="id_Usr2" style="display:none;" value="'.$f['id'].'">
  <input name="id22" style="display:none;" value="'.$id.'">

  <button  class="btn btn-primary"><i class="far fa-thumbs-up mr-1"></i>'.$result3.'</button>
  
  </form>
</p>




</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Denunciar</h5>
      <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
    </div>
    <div class="modal-body">
    <form action="../../Controller/solicitudDenuncia.php" method="POST" onsubmit="return validar()">
    <input name="id_Usr1" style="display:none;" value="'.$_SESSION['unique_Id'].'" >
    <input name="id_Usr3" style="display:none;" value="'.$f['unique_Id'].'" >                                   
    <input name="id_Usr2" style="display:none;" value="'.$f['id'].'" >
    <input name="tipo" style="display:none;" value="Publicación" >
    <label>Por que deseas denunciaresa publicación ?</label>
    <textarea name="descripcion" id="descripcion"  rows="2" cols="55" placeholder="Escribe el motivo de tu solicitud"></textarea>
    <div id="aviso"></div>
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
    }

   

}








?>
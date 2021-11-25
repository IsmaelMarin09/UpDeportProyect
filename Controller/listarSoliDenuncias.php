<?php 

  function cargarDenuncias(){
      $objetoConsultas= new consultasAdmin();
      $result=$objetoConsultas->listarTablas("denuncias");

      if (!isset($result)) {
       
        echo '<h2>NO HAY DATOS</h2>';



   }
   else{
    echo '<div>
    <thead>
    <tr>
      <th style="text-align: center;border-color: #9d7832;border-top-width: 1px;border-left-width: 1px;">ID</th>
      <th style="text-align: center;border-color: #9d7832;border-top-width: 1px;border-left-width: 1px;">Id Solicitado</th> 
      <th style="text-align: center;border-color: #9d7832;border-top-width: 1px;border-left-width: 1px;">Id Denunciado</th>
      <th style="text-align: center;border-color: #9d7832;border-top-width: 1px;border-left-width: 1px;">Id de Persona o publicación</th>
      <th style="text-align: center;border-color: #9d7832;border-top-width: 1px;border-left-width: 1px;">Tipo</th>
      <th style="text-align: center;border-color: #9d7832;border-top-width: 1px;border-left-width: 1px;">Estado</th>
      <th style="text-align: center;border-color: #9d7832;border-top-width: 1px;border-left-width: 1px;">Ver</th>
      <th style="text-align: center;border-color: #9d7832;border-top-width: 1px;border-left-width: 1px;">Interacciones</th>
      
      
    </tr>
    </thead>

    <tbody>
            
   
            
    ';
    $rResult=array_reverse($result);
    foreach ($rResult as $f) {
 
      
       
        echo '<tr data-widget="expandable-table" aria-expanded="false">'  ;
        echo "<td>" .$f['id']."</td>";
        echo "<td>" .$f['unique_IdS']."</td>";
        echo "<td>" .$f['unique_IdD']."</td>";
        echo "<td>" .$f['IdP']."</td>";
        echo "<td>" .$f['tipo']."</td>";
       
        echo "<td>" .$f['estado']."</td>";
        if ($f['tipo']=="Persona") {
          echo " <td><a href='profile.php?id_user2=".$f["IdP"]."'>Ver</a></td>"; 
        }else {
          echo '<td><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Ver</a></td>'; 
        }
       
        echo "<td><a href='../../controller/modSolicitarPqrs.php?id=".$f["id"]."'>Aceptar</a>";     
        echo' <tr class="expandable-body">';
        echo'  <td colspan="8">';
        echo"<p>";
        echo  $f['descripcion'];
          echo"    </p>";
          echo"  </td>";
          echo"</tr>";
        
       
        echo "</tr>";
        


echo '</tbody>';
echo '<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Denunciar</h5>
      <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
    </div>
    <div class="modal-body">';
    $objetoConsulta=new consultasAdmin();
  $result=$objetoConsulta->listarSeguidores($f['IdP'],"publicaciones","id");
  foreach ($result as $f) {
    $result2=$objetoConsulta->selecUser($f['unique_Id'],"users");
    foreach ($result2 as $f2) 
      echo'<div>
    
      <br>
          <span class="username"><a href="profile.php?id_user2='.$f2['unique_Id'].'">'.$f2['nombre'].'</a></span>
          <span class="description">'.$f['f_Publicacion'].'</span>
    
      <p style="margin-top:1px">';
      if ($f['des_Video']=='none') {
      }else {
        echo'link:'.$f['des_Video'].'';
      }echo'</p><p>';
      if ($f['descripcion']=='none') {
      } else {echo $f['descripcion'];
      }echo'</p><div class="container">  
      <div class="row align-items-start">';                 
      if ($f['img1']=='none') {
      }else {
      echo'<div class="col" style="justify-content: center;
      display: flex;">
      <img id="fotosPublicaciones"class="img-fluid"
      src="../Assets/img/img_publicaciones/'.$f['img1'].'"alt="Photo"/></div>';
      }if ($f['img2']=='none') {
      }else {                
      echo'<div class="col" style="justify-content: center;
      display: flex;"><img id="fotosPublicaciones"class="img-fluid"
      src="../Assets/img/img_publicaciones/'.$f['img2'].'"alt="Photo"/></div>';
      }
      if ($f['img3']=='none') {                  
      }else {
      echo'<div class="col" style="justify-content: center;display: flex;">
      <img id="fotosPublicaciones"class="img-fluid"
      src="../Assets/img/img_publicaciones/'.$f['img3'].'"alt="Photo"/></div>';
      }echo '</p>
  
  </div>
</div>
</div>
';
   
 } ;
};
}

}

  

?>
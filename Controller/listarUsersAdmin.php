<?php 

  function cargarUsers(){
      $objetoConsultas= new consultasAdmin();
      $result=$objetoConsultas->listarUsers();

      if (!isset($result)) {
       
        echo '<h2>NO HAY DATOD</h2>';



   }
   else{
    echo '
    <thead>
    <tr>
      <th>ID</th>
      <th>unique_ID</th>
      <th>Nombre</th>
      <th>Correo</th>
      <th>Rol</th>
      <th>Deporte</th>
      <th>Fecha</th>
      <th>lugar</th>
      <th>Género</th>
      <th>Estado</th>
      <th>Modificar</th>
      <th>Ver perfil</th>
      <th>Deshabilitar</th>
  
    </tr>
    </thead>

    <tbody>
            
   
            
    ';

    foreach ($result as $f) {
        echo "<tr>";
        echo "<td>" .$f['id']."</td>";
        echo "<td>" .$f['unique_Id']."</td>";
        echo "<td>" .$f['nombre']."</td>";
        echo "<td>" .$f['email']."</td>";
        echo "<td>" .$f['rol']."</td>";
        echo "<td>" .$f['deporte']."</td>";
        echo "<td>" .$f['fNacimiento']."</td>";
        echo "<td>" .$f['municipio']."</td>";
        echo "<td>" .$f['genero']."</td>";
        echo "<td>" .$f['estado']."</td>";
        echo " <td><a href='modificarUser.php?id_modificar=".$f['id']."'>Modificar </td>";
        echo " <td><a href='profile.php?id_user2=".$f['unique_Id']."'>Ver perfil </td>";
        echo " <td><a href='../../Controller/eliminarUser.php?id_eliminar=".$f['unique_Id']."'>Deshabilitar </td>";
       
        echo "</tr>";


};
echo '</tbody>';

   
 } ;


         
      }

  

?>
<?php 

  function cargarUsers(){
      $objetoConsultas= new consultasAdmin();
      $result=$objetoConsultas->listarUsers();

      if (!isset($result)) {
        echo '
        <thead>
        <tr>
          <th>ID</th>
          <th>unique_ID</th>
          <th>nombre</th>
          <th>Correo</th>
          <th>Rol</th>
          <th>deporte</th>
          <th>Fecha</th>
          <th>lugar</th>
          <th>Genero</th>
          <th>Estado</th>
          <th>Deshabilitar</th>
          <th>Modificar</th>
        </tr>
        </thead>

        <tbody>
                
       
                
        ';

        foreach ($resut as $f) {
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
            echo " <td><a href='../Controlador/eliminar.php?id_producto=".$f['id']."'>Deshabilitar </td>";
            echo " <td><a href='../Controlador/modificar.php?id_producto=".$f['id']."'>Modificar </td>";
            echo "</tr>";


    };
    echo '</tbody>';





   }
   else{
    echo '<h2>NO HAY DATOD</h2>';
 } ;


         
      }

  

?>
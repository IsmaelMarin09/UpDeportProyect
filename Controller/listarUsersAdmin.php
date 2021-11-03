<?php 

  function cargarUsers(){
      $objetoConsultas= new consultasAdmin();
      $resut=$objetoConsultas->listarUsers();

      if (!isset($result)) {

          echo '<h2>NO HAY DATOD</h2>';
      }else{
          echo '
          <thead>
          <tr>
            <th>ID</th>
            <th>ID</th>
            <th></th>
            <th>Engine version</th>
            <th>CSS grade</th>
          </tr>
          </thead>

          <tbody>
                  
         
                  
          ';

          foreach ($resut as $f) {
              echo "<tr>";
              echo "<td>" .$f['id']."</td>";
              echo "<td>" .$f['unique_id']."</td>";
              echo "<td>" .$f['nombre']."</td>";
              echo "<td>" .$f['email']."</td>";
              echo "<td>" .$f['clave']."</td>";
              echo "<td>" .$f['img']."</td>";
              echo "<td>" .$f['rol']."</td>";
              echo "<td>" .$f['deporte']."</td>";
              echo "<td>" .$f['fNacimiento']."</td>";
              echo "<td>" .$f['municipio']."</td>";
              echo "<td>" .$f['genero']."</td>";
              echo "<td>" .$f['estado']."</td>";
              echo "</tr>";


      };
      echo '</tbody>';




  
     };
     } ;


  

?>
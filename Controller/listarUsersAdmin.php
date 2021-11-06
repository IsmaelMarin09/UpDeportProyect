<?php 

  function cargarUsers(){
      $objetoConsultas= new consultasAdmin();
      $result=$objetoConsultas->listarUsers();

      if (!isset($result)) {

          echo '<h2>NO HAY DATOD</h2>';
      }else{
          echo '
          <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            
            <th>IDENTIFCACION</th>
            <th>NOMBRE</th>
            <th>EMAIL</th>
            <th>ROL</th>
            <th>ESTADO</th>
            <th>VER/EDITAR</th>
            <th>ELIMINAR</th>
          </tr>
          </thead>
          <tbody>
         
                  
         
                  
          ';

          foreach ($result as $f) {
              echo'
            <tr>
              <td>'.$f["unique_id"].'</td>
              <td>'.$f["nombre"].'</td>
              <td>'.$f["email"].'</td>
              <td>'.$f["rol"].'</td>
              <td>'.$f["estado"].'</td>
              <td><a href="#">VER/EDITAR </a></td>
              <td><a href="#">ELIMINAR </a></td>
              
            </tr>
           
          </table>' ;
            


      };
      echo '</tbody>';




  
     };
     } ;


  

?>
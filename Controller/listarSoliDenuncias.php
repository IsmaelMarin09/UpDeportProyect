<?php 

  function cargarDenuncias(){
      $objetoConsultas= new consultasAdmin();
      $result=$objetoConsultas->listarTablas("denuncias");

      if (!isset($result)) {
       
        echo '<h2>NO HAY DATOS</h2>';



   }
   else{
    echo '
    <thead>
    <tr>
      <th>ID</th>
      <th>Id Solicitado</th>
      <th>Id Denunciado</th>
      <th>Id de Persona o publicación</th>
      <th>Tipo</th>
      <th>Estado</th>
      <th>Ver</th>
      <th>Interacciones</th>
      
      
    </tr>
    </thead>

    <tbody>
            
   
            
    ';
   
    foreach ($result as $f) {
 
      
       
        echo '<tr data-widget="expandable-table" aria-expanded="false">'  ;
        echo "<td>" .$f['id']."</td>";
        echo "<td>" .$f['unique_IdS']."</td>";
        echo "<td>" .$f['unique_IdD']."</td>";
        echo "<td>" .$f['IdP']."</td>";
        echo "<td>" .$f['tipo']."</td>";
       
        echo "<td>" .$f['estado']."</td>";
        echo " <td><a href='profile.php?id_user2='>Ver</td>"; 
        echo "<td><button>Aceptar</button><button>Modificar</button></td>";     
        echo' <tr class="expandable-body">';
        echo'  <td colspan="8">';
        echo"<p>";
        echo  $f['descripcion'];
          echo"    </p>";
          echo"  </td>";
          echo"</tr>";
        
       
        echo "</tr>";
        

};
echo '</tbody>';

   
 } ;


         
      }

  

?>
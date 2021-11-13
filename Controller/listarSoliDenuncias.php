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
      <th>Id Denuncido</th>
      <th>Id Seccion</th>
      <th>Tipo</th>
      <th>Ver</th>
      <th>Estado</th>
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
        echo "<td>" .$f['descripcion']."</td>";
        echo " <td><a href='profile.php?id_user2='>Ver</td>";      
        echo' <tr class="expandable-body">';
        echo'  <td colspan="7">';
        echo"<p>";
        echo"      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
          echo"    </p>";
          echo"  </td>";
          echo"</tr>";
        
       
        echo "</tr>";


};
echo '</tbody>';

   
 } ;


         
      }

  

?>
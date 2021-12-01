<?php 

  function cargarUsers(){
      $objetoConsultas= new consultasAdmin();
      $result=$objetoConsultas->listarSeguidores("En espera","documentoshunters","estado");

      if (!isset($result)) {
       
        echo '<h2>NO HAY DATOS</h2>';



   }
   else{
    echo '
    <thead>
    <tr>
      <th>ID</th>
      <th>unique_ID</th>
      <th>Cédula</th>
      <th>Hoja de vida</th>
      <th>Certificación laboral</th>
      <th>Estado</th>
      <th>Aceptar</th>
      <th>No aceptar</th>
      
  
    </tr>
    </thead>

    <tbody>
            
   
            
    ';

    foreach ($result as $f) {
        echo "<tr>";
        echo "<td>" .$f['id']."</td>";
        echo "<td>" .$f['unique_Id']."</td>";
        echo "<td><a href='../Assets/img/documentos_hunters/".$f['unique_Id']."cc.pdf'' target='_blank'>" .$f['cedula']."</td>";
        echo "<td><a href='../Assets/img/documentos_hunters/".$f['unique_Id']."hv.pdf'' target='_blank'>" .$f['hojaDeVida']."</td>";
        echo "<td><a href='../Assets/img/documentos_hunters/".$f['unique_Id']."cl.pdf'' target='_blank'>" .$f['certificacionLaboral']."</td>";
        echo "<td>" .$f['estado']."</td>";
        echo " <td><a href='../../Controller/acepSoliHunter.php?id_hunter=".$f['unique_Id']."'>Aceptar solicitud</td>";
        echo " <td><a href='../../Controller/deneSoliHunter.php?id_hunter=".$f['unique_Id']."'>Cancelar solicitud</td>";
       
       
        echo "</tr>";


};
echo '</tbody>';

   
 } ;
 function cargarUsers2(){
 $objetoConsultas= new consultasAdmin();
 $result=$objetoConsultas->listarTablas("documentoshunters");
 if (!isset($result)) {
   echo '<h2>No hay datos</h2>';

}
else{
echo '
<thead>
<tr>
 <th>ID</th>
 <th>unique_ID</th>
 <th>Cédula</th>
 <th>Hoja de vida</th>
 <th>Certificación laboral</th>
 <th>Estado</th>

 

</tr>
</thead>

<tbody>
       

       
';

foreach ($result as $f) {
   echo "<tr>";
   echo "<td>" .$f['id']."</td>";
   echo "<td>" .$f['unique_Id']."</td>";
   echo "<td><a href='../Assets/img/documentos_hunters/".$f['unique_Id']."cc.pdf'' target='_blank'>" .$f['cedula']."</td>";
   echo "<td><a href='../Assets/img/documentos_hunters/".$f['unique_Id']."hv.pdf'' target='_blank'>" .$f['hojaDeVida']."</td>";
   echo "<td><a href='../Assets/img/documentos_hunters/".$f['unique_Id']."cl.pdf'' target='_blank'>" .$f['certificacionLaboral']."</td>";
   echo "<td>" .$f['estado']."</td>";
   
  
  
   echo "</tr>";


};
echo '</tbody>';


} ;

         
      }

}

?>
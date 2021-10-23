
<?php
   include "db.php";

  $consultas="SELECT * FROM chat ORDER BY id DESC";
  $ejecutar=$conexion ->query($consultas);
   while ($fila=$ejecutar->fetch_array()) :
    

?>
<div id="datos-chat">
  <span ><?php echo $fila['mensaje']; ?> </span>
  <span ><?php echo  $fila['fecha'];?> </span>
</div>
<?php  endwhile; ?>
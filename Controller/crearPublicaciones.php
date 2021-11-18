<?php

function publicacionesCrear(){

echo'<form action="" method="post" enctype="multipart/form-data">
<div class="input-group mb-3">
<input
type="text"
class="form-control"
placeholder="coloca la url de tu video"
name="descripcionV"
/>
</div>
<div class="input-group mb-3">
<input
type="text"
class="form-control"
placeholder="descripción"
name="descripcionP"
/>
</div>
<div class="input-group mb-6" style="padding-left: 75px;">
<input  type="file" name="imagen1" accept=".jpg, .png, .gif, .jpeg"> 
</div>
<div class="input-group mb-6" style="padding-left: 75px;">
<input  type="file" name="imagen2" accept=".jpg, .png, .gif, .jpeg"> 
</div>
<div class="input-group mb-6" style="padding-left: 75px;">
<input  type="file" name="imagen3" accept=".jpg, .png, .gif, .jpeg"> 
</div>
  <div class="col-5">
    <button type="submit" class="btn btn-primary btn-block">Registrarse
    </button> 
  </div>
</form>';}

?>

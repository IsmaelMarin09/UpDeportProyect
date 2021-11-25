<?php

function publicacionesCrear(){

echo'<div style="border: solid 1px #e6e8eb; padding: 15px;">
      <form action="../../Controller/subirPublicaciones.php" method="post" enctype="multipart/form-data">
        <div class="input-group mb-3">
          <input style="border-color: #9d7832;" type="text" class="form-control" placeholder="coloca la url de tu video" name="descripcionV"/>
        </div>
        <div class="input-group mb-3">
          <input style="border-color: #9d7832;" type="text"class="form-control"placeholder="descripción"name="descripcionP"/>
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span style="border-color: #9d7832;" class="input-group-text" id="inputGroupFileAddon01">cargar</span>
          </div>
          <div class="custom-file">
            <input type="file" name="imagen1" accept=".jpg, .png, .gif, .jpeg" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
            <label style="border-color: #9d7832;" class="custom-file-label" for="inputGroupFile02">Cargar imagen</label>
          </div>
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
          <span style="border-color: #9d7832;" class="input-group-text" id="inputGroupFileAddon01">cargar</span>
          </div>
          <div class="custom-file">
            <input type="file" name="imagen2" accept=".jpg, .png, .gif, .jpeg" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
            <label style="border-color: #9d7832;" class="custom-file-label" for="inputGroupFile02">Cargar imagen</label>
          </div>
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span style="border-color: #9d7832;" class="input-group-text" id="inputGroupFileAddon01">cargar</span>
          </div>
          <div class="custom-file">
            <input type="file" name="imagen3" accept=".jpg, .png, .gif, .jpeg" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
            <label style="border-color: #9d7832;" class="custom-file-label" for="inputGroupFile02">Cargar imagen</label>
          </div>
        </div>
        <div class="col-5">
          <button type="submit" class="btn btn-primary btn-block">Publicar
          </button> 
        </div>
      </form>
    </div>';}

?>

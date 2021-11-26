<?php

function publicacionesCrear(){

echo'
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Crea Publicaciones 
        </button>
      </h2>
    </div>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body" style="border: solid 1px #e6e8eb; padding: 15px;">
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
          <div class="col-5 float-right">
            <button type="submit" class="btn btn-primary btn-block">Publicar
            </button> 
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
    
      
    ';}

?>

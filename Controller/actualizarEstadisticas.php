<?php
function cargarUser(){
    if (isset($_SESSION['unique_Id'])) {
        $objetoconsulta=new consultasAdmin();
        $unique_Id=$_SESSION['unique_Id'];
        $result=$objetoconsulta->listarEstadisticas($unique_Id);
        foreach($result as $f){
            echo ' <div class="container">
            <h3>SELECCIONA DEL 1 AL 10,  SIENDO  1 DEFICIENTE Y 10 EXCELENTE EN LAS DIFERENTES CAPACIDADES FISICAS</h3>
            <div class="row">
            <form action="" method="post">
              <div class="col-md-6">
                          
                          <select class="form-select" aria-label="Default select example" name="resistencia">
                          <option value="'.$f['resistencia'].'">'.$f['resistencia'].'</option>
                              <option >RESISTENCIA</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                          </select>
                          <select class="form-select" aria-label="Default select example" name="fuerza">
                          <option value=""></option>    
                          <option >FUERZA</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                          </select>
                          <select class="form-select" aria-label="Default select example" name="velocidad">
                          <option value=""></option>    
                          <option >VELOCIDAD</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                          </select>
                          <select class="form-select" aria-label="Default select example" name="flexbilidad">
                          <option value=""></option>    
                          <option >FLEXIBILIDAD</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                          </select>

                      </div>
                      <div class="col-md-6">
                          <select class="form-select" aria-label="Default select example" name="coordinacion">
                          <option value=""></option>    
                          <option >COORDINACION</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                          </select>
                          <select class="form-select" aria-label="Default select example" name="equilibrio">
                          <option value=""></option>    
                          <option >EQUILIBRIO</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                          </select>
                          <select class="form-select" aria-label="Default select example" name="agilidad">
                          <option value=""></option>    
                          <option >AGILIDAD</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                          </select>
                          <select class="form-select" aria-label="Default select example" name="reaccion">
                          <option value=""></option>    
                          <option >REACCION</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                          </select>
                      </div>

            </form>
              
                      



              </div>
          </div>';


        }}}
?>
<?php
function cargarEstadisticas2(){
    if (isset($_SESSION['unique_Id'])) {
        $objetoconsulta=new consultasAdmin();
        $unique_Id=$_SESSION['unique_Id'];
        $result=$objetoconsulta->listarEstadisticas($unique_Id);
        foreach($result as $f){
            echo ' 
        <div class="container">
            <h3>SELECCIONA DEL 1 AL 10,  SIENDO  1 DEFICIENTE Y 10 EXCELENTE EN LAS DIFERENTES CAPACIDADES FISICAS</h3>
           
            <form action="../../Controller/nuevasEsta.php" method="post">

            <class="row">
            <div class="col-sm-6" style="padding-top: 4px;">
                <small id="emailHelp" class="form-text text-muted" style="margin: 0;">Ingrese como se considera en resistencia.</small>
                <div class="input-group mb-3" style="margin-bottom: 0rem !important; ">
                        <select class="form-select" aria-label="Default select example" name="resistencia">
                            <option value="'.$f['resistencia'].'">'.$f['resistencia'].'</option>
                            
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
                        <div class="input-group-append">
                            <div class="input-group-text" style="border-color: #9d7832;">
                                <span class="fas fa-user-ninja"></span>
                            </div>
                        </div>
                </div>
                <small id="emailHelp" class="form-text text-muted" style="margin: 0;">Ingrese como se considera en fuerza.</small>
                <div class="input-group mb-3" style="margin-bottom: 0rem !important; ">
                            <select class="form-select" aria-label="Default select example" name="fuerza">
                                <option value="'.$f['fuerza'].'">'.$f['fuerza'].'</option>   
                              
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
                        <div class="input-group-append">
                            <div class="input-group-text" style="border-color: #9d7832;">
                                <span class="fas fa-user-ninja"></span>
                            </div>
                        </div>
                </div>
                <small id="emailHelp" class="form-text text-muted" style="margin: 0;">Ingrese como se considera en velocidad.</small>
                <div class="input-group mb-3" style="margin-bottom: 0rem !important; ">
                            <select class="form-select" aria-label="Default select example" name="velocidad">
                                <option value="'.$f['velocidad'].'">'.$f['velocidad'].'</option>    
                             
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
                        <div class="input-group-append">
                            <div class="input-group-text" style="border-color: #9d7832;">
                                <span class="fas fa-user-ninja"></span>
                            </div>
                        </div>
                </div>
                <small id="emailHelp" class="form-text text-muted" style="margin: 0;">Ingrese como se considera en flexibilidad.</small>
                <div class="input-group mb-3" style="margin-bottom: 0rem !important; ">
                            <select class="form-select" aria-label="Default select example" name="flexibilidad">
                                <option value="'.$f['flexibilidad'].'">'.$f['flexibilidad'].'</option>  
                          
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

                        <div class="input-group-append">
                            <div class="input-group-text" style="border-color: #9d7832;">
                                <span class="fas fa-user-ninja"></span>
                            </div>
                        </div>
                </div>
            </div>    
            <div class="col-lg-6">
                <small id="emailHelp" class="form-text text-muted" style="margin: 0;">Ingrese como se considera en coordinación.</small>
                <div class="input-group mb-3" style="margin-bottom: 0rem !important; ">
                            <select class="form-select" aria-label="Default select example" name="coordinacion">
                                <option value="'.$f['coordinacion'].'">'.$f['coordinacion'].'</option>   
                               
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
                        <div class="input-group-append">
                            <div class="input-group-text" style="border-color: #9d7832;">
                                <span class="fas fa-user-ninja"></span>
                            </div>
                        </div>
                </div>
                <small id="emailHelp" class="form-text text-muted" style="margin: 0;">Ingrese como se considera en equilibrio.</small>
                <div class="input-group mb-3" style="margin-bottom: 0rem !important; ">
                            <select class="form-select" aria-label="Default select example" name="equilibrio">
                                <option value="'.$f['equilibrio'].'">'.$f['equilibrio'].'</option>  
                                
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
                        <div class="input-group-append">
                            <div class="input-group-text" style="border-color: #9d7832;">
                                <span class="fas fa-user-ninja"></span>
                            </div>
                        </div>
                </div>
                <small id="emailHelp" class="form-text text-muted" style="margin: 0;">Ingrese como se considera en agilidad.</small>
                <div class="input-group mb-3" style="margin-bottom: 0rem !important; ">
                            <select class="form-select" aria-label="Default select example" name="agilidad">
                                <option value="'.$f['agilidad'].'">'.$f['agilidad'].'</option> 
                                
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
                        <div class="input-group-append">
                            <div class="input-group-text" style="border-color: #9d7832;">
                                <span class="fas fa-user-ninja"></span>
                            </div>
                        </div>
                </div>
                <small id="emailHelp" class="form-text text-muted" style="margin: 0;">Ingrese como se considera en reacción.</small>
                <div class="input-group mb-3" style="margin-bottom: 0rem !important; ">
                            <select class="form-select" aria-label="Default select example" name="reaccion">
                                <option value="'.$f['reaccion'].'">'.$f['reaccion'].'</option>   
                               
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
                        <div class="input-group-append">
                            <div class="input-group-text" style="border-color: #9d7832;">
                                <span class="fas fa-user-ninja"></span>
                            </div>
                        </div>
                </div>
        
            </div>
            
              
                      <div class="col-md-6">
                          
                         
                         
                        
                          <input readonly style="display:none" type="text" class="knob" name="id" value="'.$f['id'].'" >
                      </div>
                      <div class="row">
                      <div class="col-7">
                      
                      <div class="col-5">
                        <button style="margin-top:20px" type="submit" class="btn btn-primary btn-block">
                          Modificar
                        </button>
                      </div>
                      <!-- /.col -->
                    </div>

            </form>
              
                      



              </div>
          </div>';


        }}}
?>

           
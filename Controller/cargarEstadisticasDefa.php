<?php
function cargarEstadisticas(){
$id=($_SESSION['unique_Id']);
$objetoConsultas=new consultasAdmin();
$result=$objetoConsultas-> listarEstadisticas ($id);
foreach($result as $f){
    echo'
    <div class="row">
                                              <div class="col-6 col-md-3 text-center">
                                                <input readonly type="text" class="knob" value="'.$f['resistencia'].'" data-min="0" data-max="10" data-width="90" data-height="90" data-fgColor="#3c8dbc">

                                                <div class="knob-label">Resistencia</div>
                                              </div>
                                              <!-- ./col -->
                                              <div class="col-6 col-md-3 text-center">
                                                <input readonly type="text" class="knob" value="'.$f['fuerza'].'"data-min="0" data-max="10" data-width="90" data-height="90" data-fgColor="#f56954">

                                                <div class="knob-label">Fuerza</div>
                                              </div>
                                              <!-- ./col -->
                                              <div class="col-6 col-md-3 text-center">
                                                <input readonly type="text" class="knob" value="'.$f['velocidad'].'" data-min="0" data-max="10" data-width="90"
                                                      data-height="90" data-fgColor="#00a65a">

                                                <div class="knob-label">Velocidad</div>
                                              </div>
                                              <!-- ./col -->
                                              <div class="col-6 col-md-3 text-center">
                                                <input readonly type="text" class="knob" value="'.$f['flexibilidad'].'"data-min="0" data-max="10" data-width="90" data-height="90" data-fgColor="#00c0ef">

                                                <div class="knob-label">Flexibilidad</div>
                                              </div>
                                              <!-- ./col -->
                                            </div>
                                            <!-- /.row -->

                                            <div class="row">
                                              <div class="col-3 text-center">
                                                <input readonly type="text" class="knob" value="'.$f['coordinacion'].'"data-min="0" data-max="10" data-width="90" data-height="90" data-fgColor="#932ab6">

                                                <div class="knob-label">Coordinacion</div>
                                              </div>
                                              <!-- ./col -->
                                              <div class="col-3 text-center">
                                                <input readonly type="text" class="knob" value="'.$f['equilibrio'].'"data-min="0" data-max="10" data-width="90" data-height="90" data-fgColor="#39CCCC">

                                                <div class="knob-label">Equilibrio</div>
                                              </div>
                                              <div class="col-3 text-center">
                                                <input readonly type="text" class="knob" value="'.$f['agilidad'].'"data-min="0" data-max="10" data-width="90" data-height="90" data-fgColor="#39CCCC">

                                                <div class="knob-label">Agilidad</div>
                                              </div>
                                              <div class="col-3 text-center">
                                              <input readonly type="text" class="knob" value="'.$f['reaccion'].'"data-min="0" data-max="10" data-width="90" data-height="90" data-fgColor="#39CCCC">

                                              <div class="knob-label">Reaccion</div>
                                            </div>
                                              <!-- ./col -->
                                            </div>
    ';

}

}


?>
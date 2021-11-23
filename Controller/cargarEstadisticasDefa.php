<?php
function cargarEstadisticas(){
$id=($_SESSION['unique_Id']);
$objetoConsultas=new consultasAdmin();
$result=$objetoConsultas-> listarEstadisticas ($id);
foreach($result as $f){
    echo'
    series.data.setAll([
        { value: '.$f['resistencia'].', category: "Resistencia" },
        { value: '.$f['fuerza'].', category: "Fuerza" },
        { value: '.$f['velocidad'].', category: "Velocidad" },
        { value: '.$f['flexibilidad'].', category: "Flexibilidad" },
        { value: '.$f['coordinacion'].', category: "Coordinacion" },
        { value: '.$f['equilibrio'].', category: "Equilibrio" },
        { value: '.$f['agilidad'].', category: "Agilidad" },
        { value: '.$f['reaccion'].', category: "Reaccion" }
      ]);
    ';

}

}


?>
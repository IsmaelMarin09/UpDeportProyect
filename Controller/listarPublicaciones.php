<?php
 function listarPublicaciones(){
    $objetoConsultas= new consultasAdmin;
    $result=$objetoConsultas->listarPublicaciones();
    if (!isset($result)) {
        echo '<h2>NO HAY PUBLICACIONES</h2>';

    }else{
        echo '
        <thead>
        <tr>
            <th>ID</th>
            <th>unique_ID</th>
            <th>Descripcion</th>
            <th>Video</th>
            <th>Imagen1</th>
            <th>Imagen2</th>
            <th>Imagen3</th>
            <th>Fecha</th>
            <th>likes</th>
            <th>Estado</th>
            <th>Ver Perfil</th>
            <th>Deshabilitar</th>
        
        </tr>
        </thead>
    
        <tbody>
                
       
                
        ';
    
        foreach ($result as $f) {
            echo "<tr>";
            echo "<td>" .$f['id']."</td>";
            echo "<td>" .$f['unique_Id']."</td>";
            echo "<td>" .$f['descripcion']."</td>";
            echo "<td>" .$f['des_Video']."</td>";
            echo "<td>" .$f['img1']."</td>";
            echo "<td>" .$f['img2']."</td>";
            echo "<td>" .$f['img3']."</td>";
            echo "<td>" .$f['f_Publicacion']."</td>";
            echo "<td>" .$f['likes']."</td>";
            echo "<td>" .$f['estado']."</td>";
            echo " <td><a href='profile.php?id_user2=".$f['unique_Id']."'>Ver perfil </td>";
            echo " <td><a href='../../Controller/elimanarPublicacion.php?id_eliminar=".$f['id']."'>Eliminar </td>";
            echo "</tr>";
    
    
    };
    echo '</tbody>';
    
    }


}


?>

<?php
    session_start();
    include_once "../../../Model/config.php";
    $outgoing_id = $_SESSION['unique_Id'];
    $sql = "SELECT * FROM users WHERE NOT unique_Id = {$outgoing_id} ORDER BY id DESC";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "No existen mensajes en el chat";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }
    echo $output;
?> 
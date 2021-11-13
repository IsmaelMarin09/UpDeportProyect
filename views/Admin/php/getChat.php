<?php 
    session_start();
    if(isset($_SESSION['unique_Id'])){
        include_once "../../../Model/config.php";
        $outgoing_id = $_SESSION['unique_Id'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $output = "";
        // $sql="SELECT * FROM messages WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id})
        //       OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC";
         $sql = "SELECT * FROM messages LEFT JOIN users ON users.unique_Id = messages.outgoing_msg_id
                 WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id})
                 OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id}) ORDER BY msg_id";
        $query = mysqli_query($conn, $sql);
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
                if($row['outgoing_msg_id'] === $outgoing_id){
                    $output .= '<div class="chat outgoing">
                                <div class="details">
                                    <p>'. $row['msg'] .'</p>
                                </div>
                                </div>';
                }else{
                    $output .= '<div class="chat incoming">
                                <img src="../Assets/img/perfil_img/'.$row['img'].'" alt="">
                                <div class="details">
                                    <p>'. $row['msg'] .'</p>
                                </div>
                                </div>';
                }
            }
        }else{
            $output .= '<div class="text">No hay mensajes disponibles. Una vez que envíe el mensaje, aparecerán aquí.</div>';
        }
        echo $output;
    }else{
        echo 'hola';
    }


    
?>
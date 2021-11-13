<?php
    while($row = mysqli_fetch_assoc($query)){
        $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_Id']}
                OR outgoing_msg_id = {$row['unique_Id']}) AND (outgoing_msg_id = {$outgoing_id} 
                OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
        $query2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($query2);
        (mysqli_num_rows($query2) > 0) ? $result = $row2['msg'] : $result ="Todavia no hay mensajes";
        (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
        if(isset($row2['outgoing_msg_id'])){
            ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "Tu: " : $you = "";
        }else{
            $you = "";
        }
        ($row['online'] == "OFFLINE") ? $offline = "offline" : $offline = "";
        ($outgoing_id == $row['unique_Id']) ? $hid_me = "hide" : $hid_me = "";

        $output .= '<a href="chat.php?id='. $row['unique_Id'] .'">
                    <div class="content">
                    <img src="../Assets/img/perfil_img/'. $row['img'] .'" alt="">
                    <div class="details">
                        <span>'. $row['nombre'].'</span>
                        <p>'. $you . $msg .'</p>
                    </div>
                    </div>
                    <div class="status-dot '. $offline .'"><i class="fas fa-circle"></i></div>
                </a>';
    }
?>
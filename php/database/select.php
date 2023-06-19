<?php

include_once 'connect.php';

$select = "SELECT * FROM `app`";
$result = $db->query($select);

while($row = $result->fetch_assoc()){
    $id_app = $row['id'];
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];

    if(isset($id_app, $first_name, $last_name)){

        $insert = "INSERT INTO `request` (`id_app`, `f_name`, `l_name`)
        VALUES ('$id_app', '$first_name', '$last_name')";

        if($db->query($insert) === true){
            console_log('Данные продублированы');
        }else{
            console_log("Возникла ошибка при переносе данных: $db->error");
        };
    };
}

?>
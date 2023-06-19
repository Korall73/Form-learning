<?php

include_once 'connect.php';

$login = $_POST['login'];
$password = $_POST['password'];
$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$age = $_POST['age'];

if(isset($login, $password, $f_name, $l_name, $age)){
    $sql = "INSERT INTO `app` (`login`, `password`, `first_name`, `last_name`, `age`)
    VALUES ('$login', '$password', '$f_name', '$l_name', '$age')";

    if($db->query($sql) === true){
        console_log('Данные отправлены на сервер');
    }else{
        console_log("Ошибка при отправке данных на сервер: $db->error");
    };
}

?>
<?php

include_once './php/main/mainFunction.php';

$host = '127.0.0.1';
$root = 'root';
$pass = '';
$db_name = '';

$db = mysqli_connect($host, $root, $pass, $db_name);

if($db->error){
    console_log("Ошибка при подключении к базе данных: $db->error");
}else{
    console_log('База данных успешно подключена');
};

?>
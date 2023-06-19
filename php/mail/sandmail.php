<?php

$to = "example@mail.ru";
$message = "Новый пользователь:\n\n
            Логин: $login\n
            Пароль: $password\n
            Имя: $f_name\n
            Фамилия: $l_name\n
            Дата рождения: $age\n\n\n
            Сообщение сформировано автоматически!";

    if(!empty($_POST)){
        mail($to, 'Новый пользователь', $message);
    };

    

?>
<?php

function console_log($a){
    echo '<script>';
    echo 'console.log('. json_encode( $a ) .')';
    echo '</script>';
};

?>
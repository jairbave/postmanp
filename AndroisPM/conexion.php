<?php

$mysql = new mysqli("localhost","root","","AndroidPostman");

if($mysql->connect_error){
    echo 'Error al conectar';
}else{
    echo 'Conexion Exitosa ';
}

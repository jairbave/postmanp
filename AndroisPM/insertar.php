<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

    require_once 'conexion.php';

    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $pass = $_POST["pass"];

    $consulta = "INSERT INTO usuario(nombre,email,telefono,pass) VALUES('". $nombre ."','".$email."','".$telefono."','". $pass."')";

    $resultado = $mysql-> query($consulta);

    if($resultado == true){
        echo ' El Usuario se Registro de Forma Correcta';
    }else{
        echo 'Error Usuario No Registrado';
    }
}
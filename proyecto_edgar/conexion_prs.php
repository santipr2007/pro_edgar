<?php
$conexion = new mysqli("localhost", "admin", "123456789","pedidos_pelicans");

if(mysqli_connect_errno()){
    echo 'conexion fallida:', mysqli_connect_error();
    exit();

}else{
    echo 'conexion exitosa..';
}

?>

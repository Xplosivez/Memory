<?php
$server="localhost";
$user="root";
$pass="";
$db="test2";

$conex=new mysqli($server,$user,$pass,$db);
if ($conex->connect_error) {
    die("error de conexion". $conex->connect_error);
}
else {
    echo" ";
}
?>
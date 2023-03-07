<?php
include 'conexion2.php';
$art="SELECT * From articulo WHERE Id_Articulo=$_GET[Id_Articulo]";
$result=$connection->query($art);
if(!$result==null){
    $result=mysqli_fetch_assoc($result);
    echo json_encode($result);
}
?>
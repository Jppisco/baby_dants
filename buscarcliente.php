<?php
include 'conexion2.php';
$sql="SELECT * From cliente WHERE Id_Cliente=$_GET[Id_Cliente]";
$result=$connection->query($sql);
if(!$result==null){
    $result=mysqli_fetch_assoc($result);
    echo json_encode($result);
}



?>
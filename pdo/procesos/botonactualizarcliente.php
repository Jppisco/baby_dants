<?php
require_once("../php/conexion.php");

$query="UPDATE cliente SET Nombres=:B, Apellidos=:C, Identificacion=:D, Telefono=:E, Correo=:F, Contraseña=:G WHERE Id_Cliente=:A";

$consulta = $pdo->prepare($query);
$consulta->bindParam(':A',$_POST['Id_Cliente']);
$consulta->bindParam(':B',$_POST['Nombres']);
$consulta->bindParam(':C',$_POST['Apellidos']);
$consulta->bindParam(':D',$_POST['Identificacion']);
$consulta->bindParam(':E',$_POST['Telefono']);
$consulta->bindParam(':F',$_POST['Correo']);
$consulta->bindParam(':G',$_POST['Contraseña']);

if ($consulta->execute()) {
	echo "<script>alert('Registro actualizado.'); 
		 window.location.href='../../listadocliente.php';
		 </script>";
	?><?php
}else{
echo "Error! no se puede actualizar los datos";
}
?>
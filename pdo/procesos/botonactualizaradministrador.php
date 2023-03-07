<?php
require_once("../php/conexion.php");

$query="UPDATE administrador SET Nombres=:B, Apellidos=:C, Identificacion=:D, Telefono=:E, Correo=:F, Contraseña=:G WHERE Id_Administrador=:A";

$consulta = $pdo->prepare($query);
$consulta->bindParam(':A',$_POST['Id_Administrador']);
$consulta->bindParam(':B',$_POST['Nombres']);
$consulta->bindParam(':C',$_POST['Apellidos']);
$consulta->bindParam(':D',$_POST['Identificacion']);
$consulta->bindParam(':E',$_POST['Telefono']);
$consulta->bindParam(':F',$_POST['Correo']);
$consulta->bindParam(':G',$_POST['Contraseña']);

if ($consulta->execute()) {
	echo "<script>alert('Registro actualizado.'); 
		 window.location.href='../../listadoadministrador.php';
		 </script>";
	?><?php
}else{
echo "Error! no se puede actualizar los datos";
}
?>
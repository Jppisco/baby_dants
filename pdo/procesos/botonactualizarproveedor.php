<?php
require_once("../php/conexion.php");

$query="UPDATE proveedor SET Empresa=:B, Titular=:C, Telefono=:D, Observaciones=:E WHERE Id_Proveedor=:A";

$consulta = $pdo->prepare($query);
$consulta->bindParam(':A',$_POST['Id_Proveedor']);
$consulta->bindParam(':B',$_POST['Empresa']);
$consulta->bindParam(':C',$_POST['Titular']);
$consulta->bindParam(':D',$_POST['Telefono']);
$consulta->bindParam(':E',$_POST['Observaciones']);

if ($consulta->execute()) {
	echo "<script>alert('Registro actualizado.'); 
		 window.location.href='../../listadoproveedor.php';
		 </script>";
	?><?php
}else{
echo "Error! no se puede actualizar los datos";
}
?>
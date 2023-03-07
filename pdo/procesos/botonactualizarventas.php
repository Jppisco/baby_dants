<?php
require_once("../php/conexion.php");

$query="UPDATE ventas SET Id_Articulo=:B, Articulo=:C, Cantidad=:D, Precio_Venta=:E, Total=:F, Fecha=:G WHERE Id_Articulo=:A";

$consulta = $pdo->prepare($query);
$consulta->bindParam(':A',$_POST['Id_Articulo']);
$consulta->bindParam(':B',$_POST['Id_Articulo']);
$consulta->bindParam(':C',$_POST['Articulo']);
$consulta->bindParam(':D',$_POST['Cantidad']);
$consulta->bindParam(':E',$_POST['Precio_Venta']);
$consulta->bindParam(':F',$_POST['Total']);
$consulta->bindParam(':G',$_POST['Fecha']);

if ($consulta->execute()) {
	echo "<script>alert('Registro actualizado.'); 
		 window.location.href='../../listadoventas.php';
		 </script>";
	?><?php
}else{
echo "Error! no se puede actualizar los datos";
}
?>
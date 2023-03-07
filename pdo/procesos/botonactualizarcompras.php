<?php
require_once("../php/conexion.php");

$query="UPDATE compras SET Id_Articulo=:B, Articulo=:C, Cantidad=:D, Precio_Unitario=:E, Total=:F, Fecha=:G, Id_Proveedor=:H, Iva=:I WHERE Id_Compra=:A";

$consulta = $pdo->prepare($query);
$consulta->bindParam(':A',$_POST['Id_Compra']);
$consulta->bindParam(':B',$_POST['Id_Articulo']);
$consulta->bindParam(':C',$_POST['Articulo']);
$consulta->bindParam(':D',$_POST['Cantidad']);
$consulta->bindParam(':E',$_POST['Precio_Unitario']);
$consulta->bindParam(':F',$_POST['Total']);
$consulta->bindParam(':G',$_POST['Fecha']);
$consulta->bindParam(':H',$_POST['Id_Proveedor']);
$consulta->bindParam(':I',$_POST['Iva']);

if ($consulta->execute()) {
	echo "<script>alert('Registro actualizado.'); 
		 window.location.href='../../listadocompras.php';
		 </script>";
	?><?php
}else{
echo "Error! no se puede actualizar los datos";
}
?>
<?php
require_once("../php/conexion.php");

$query = "UPDATE articulo SET Id_Categoria=:B, Articulo=:C, Precio_Entrada=:D, Precio_Salida=:E, Id_Proveedor=:F, Stock=:G, Descripcion=:H, Imagen=:I WHERE Id_Articulo=:A";

$consulta = $pdo->prepare($query);
$consulta->bindParam(':A', $_POST['Id_Articulo']);
$consulta->bindParam(':B', $_POST['Id_Categoria']);
$consulta->bindParam(':C', $_POST['Articulo']);
$consulta->bindParam(':D', $_POST['Precio_Entrada']);
$consulta->bindParam(':E', $_POST['Precio_Salida']);
$consulta->bindParam(':F', $_POST['Id_Proveedor']);
$consulta->bindParam(':G', $_POST['Stock']);
$consulta->bindParam(':H', $_POST['Descripcion']);
$consulta->bindParam(':I', $_POST['Imagen']);

if ($consulta->execute()) {
	echo "<script>alert('Registro actualizado.'); 
		 window.location.href='../../listadoarticulo.php';
		 </script>";
?>
<?php
} else {
	echo "Error! no se puede actualizar los datos";
}
?>
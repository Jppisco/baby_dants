<?php
require_once("../php/conexion.php");

$query="UPDATE categoria SET Nombre=:B, Descripcion=:C WHERE Id_Categoria=:A";

$consulta = $pdo->prepare($query);
$consulta->bindParam(':A',$_POST['Id_Categoria']);
$consulta->bindParam(':B',$_POST['Nombre']);
$consulta->bindParam(':C',$_POST['Descripcion']);

if ($consulta->execute()) {
	echo "<script>alert('Registro actualizado.'); 
		 window.location.href='../../listadocategoria.php';
		 </script>";
	?><?php
}else{
echo "Error! no se puede actualizar los datos";
}
?>
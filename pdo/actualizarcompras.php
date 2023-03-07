<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Administrador</title>
	<link href= "../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src= "js/bootstrap.min.js" ></script>
</head>
<body>
	
<div class="container">
<h1 class="row justify-content-center">ACTUALIZAR</h1>	
</div>
<br>

<?php
if (isset($_GET['Id_Compra'])) {
    $Id_Compra=$_GET['Id_Compra'];
    require_once ("../conexion.php");
$query="SELECT * FROM compras WHERE Id_Compra=$Id_Compra";
    $consulta = $pdo->prepare($query);
    $consulta->execute();

    if (empty($consulta)) {
    	echo "No existen usuarios en el sistema";
    }else{
    	$fila=$consulta->fetch();
}
}
?>

<div class="container">
	<h4 class="row justify-content-center">Actualizar una Compra</h4>
</div>
<div class="container">
	<div class="row justify-content-center">
		<form action="procesos/botonactualizarcompras.php" method="POST">
			<div class="col">
	<input class="form-control" type="hidden" name="Id_Compra" value="<?php echo $fila['Id_Compra'];?>"><p>
	Id Articulo<input class="form-control" type="number" name="Id_Articulo" value="<?php echo $fila['Id_Articulo'];?>">
	Articulo<input class="form-control" type="text" name="Articulo" value="<?php echo $fila['Articulo'];?>">
	Cantidad<input class="form-control" type="number" name="Cantidad" value="<?php echo $fila['Cantidad'];?>">
	Precio Unitario<input class="form-control" type="number" name="Precio_Unitario" value="<?php echo $fila['Precio_Unitario'];?>">
	Total<input class="form-control" type="number" name="number" value="<?php echo $fila['Total'];?>">
	Fecha<input class="form-control" type="date" name="Fecha" value="<?php echo $fila['Fecha'];?>">
	Id Proveedor<input class="form-control" type="number" name="number" value="<?php echo $fila['Id_Proveedor'];?>">
	Iva<input class="form-control" type="number" name="number" value="<?php echo $fila['Iva'];?>">
	<p><button class="btn btn-primary btn-lg" type="submit" name="Actualizar" ><a href="procesos/botonactualizarcompras.php"></a>Actualizar</button>


</div>
<br>
<p class="text-center">
</form>
</div>

</body>
</html>
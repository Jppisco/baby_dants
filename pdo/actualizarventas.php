<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Ventas</title>
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
if (isset($_GET['Id_Ventas'])) {
    $Id_Ventas=$_GET['Id_Ventas'];
    require_once ("../conexion.php");
$query="SELECT * FROM ventas WHERE Id_Ventas=$Id_Ventas";
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
	<h4 class="row justify-content-center">Actualizar una Venta</h4>
</div>
<div class="container">
	<div class="row justify-content-center">
		<form action="procesos/botonactualizarventas.php" method="POST">
			<div class="col">
	<input class="form-control" type="hidden" name="Id_Ventas" value="<?php echo $fila['Id_Ventas'];?>"><p>
	Id_Articulo<input class="form-control" type="text" name="Id_Articulo" value="<?php echo $fila['Id_Articulo'];?>">
	Articulo<input class="form-control" type="text" name="Articulo" value="<?php echo $fila['Articulo'];?>">
	Cantidad<input class="form-control" type="number" name="Cantidad" value="<?php echo $fila['Cantidad'];?>">
	Precio_Venta<input class="form-control" type="number" name="Precio_Venta" value="<?php echo $fila['Precio_Venta'];?>">
	Total<input class="form-control" type="text" name="Total" value="<?php echo $fila['Total'];?>">
	Fecha<input class="form-control" type="text" name="Fecha" value="<?php echo $fila['Fecha'];?>">

	<p><button class="btn btn-primary btn-lg" type="submit" name="Actualizar" ><a href="procesos/botonactualizarventas.php"></a>Actualizar</button>


</div>
<br>
<p class="text-center">
</form>
</div>

</body>
</html>
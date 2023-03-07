<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Proveedor</title>
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
if (isset($_GET['Id_Proveedor'])) {
    $Id_Proveedor=$_GET['Id_Proveedor'];
    require_once ("../conexion.php");
$query="SELECT * FROM proveedor WHERE Id_Proveedor=$Id_Proveedor";
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
	<h4 class="row justify-content-center">Actualizar un Proveedor</h4>
</div>
<div class="container">
	<div class="row justify-content-center">
		<form action="procesos/botonactualizarproveedor.php" method="POST">
			<div class="col">
	<input class="form-control" type="hidden" name="Id_Proveedor" value="<?php echo $fila['Id_Proveedor'];?>"><p>
	Empresa<input class="form-control" type="text" name="Empresa" value="<?php echo $fila['Empresa'];?>">
	Titular<input class="form-control" type="text" name="Titular" value="<?php echo $fila['Titular'];?>">
	Telefono<input class="form-control" type="text" name="Telefono" value="<?php echo $fila['Telefono'];?>">
	Observaciones<input class="form-control" type="text" name="Observaciones" value="<?php echo $fila['Observaciones'];?>">

	<p><button class="btn btn-primary btn-lg" type="submit" name="Actualizar" ><a href="procesos/botonactualizarproveedor.php"></a>Actualizar</button>


</div>
<br>
<p class="text-center">
</form>
</div>

</body>
</html>
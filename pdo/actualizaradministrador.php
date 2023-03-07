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
if (isset($_GET['Id_Administrador'])) {
    $Id_Administrador=$_GET['Id_Administrador'];
    require_once ("../conexion.php");
$query="SELECT * FROM administrador WHERE Id_Administrador=$Id_Administrador";
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
	<h4 class="row justify-content-center">Actualizar un Administrador</h4>
</div>
<div class="container">
	<div class="row justify-content-center">
		<form action="procesos/botonactualizaradministrador.php" method="POST">
			<div class="col">
	<input class="form-control" type="hidden" name="Id_Administrador" value="<?php echo $fila['Id_Administrador'];?>"><p>
	Nombres<input class="form-control" type="text" name="Nombres" value="<?php echo $fila['Nombres'];?>">
	Apellidos<input class="form-control" type="text" name="Apellidos" value="<?php echo $fila['Apellidos'];?>">
	Identificacion<input class="form-control" type="number" name="Identificacion" value="<?php echo $fila['Identificacion'];?>">
	Telefono<input class="form-control" type="number" name="Telefono" value="<?php echo $fila['Telefono'];?>">
	Correo<input class="form-control" type="Correo" name="Correo" value="<?php echo $fila['Correo'];?>">
	Contraseña<input class="form-control" type="password" name="Contraseña" value="<?php echo $fila['Contraseña'];?>">
	<p><button class="btn btn-primary btn-lg" type="submit" name="Actualizar" ><a href="procesos/botonactualizaradministrador"></a>Actualizar</button>


</div>
<br>
<p class="text-center">
</form>
</div>

</body>
</html>
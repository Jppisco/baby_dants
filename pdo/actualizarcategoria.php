<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Categorias</title>
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
if (isset($_GET['Id_Categoria'])) {
    $Id_Categoria=$_GET['Id_Categoria'];
    require_once ("../conexion.php");
$query="SELECT * FROM categoria WHERE Id_Categoria=$Id_Categoria";
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
	<h4 class="row justify-content-center">Actualizar una Categoria</h4>
</div>
<div class="container">
	<div class="row justify-content-center">
		<form action="procesos/botonactualizarcategoria.php" method="POST">
			<div class="col">
	<input class="form-control" type="hidden" name="Id_Categoria" value="<?php echo $fila['Id_Categoria'];?>"><p>
	Nombre<input class="form-control" type="text" name="Nombre" value="<?php echo $fila['Nombre'];?>">
	Descripcion<input class="form-control" type="text" name="Descripcion" value="<?php echo $fila['Descripcion'];?>">

	<p><button class="btn btn-primary btn-lg" type="submit" name="Actualizar" ><a href="procesos/botonactualizarcategoria.php"></a>Actualizar</button>


</div>
<br>
<p class="text-center">
</form>
</div>

</body>
</html>
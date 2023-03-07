<!DOCTYPE html>
<html>
<head>
	<title>Formulario Categoria</title>
	<link href= "css/bootstrap.min.css" rel="stylesheet" media="screen">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src= "js/bootstrap.min.js" ></script>
</head>
<body>

<?php 
include 'navbar.php'
?>
 
<div class="container">

    <p></p>

		<h1>Registro de Categorias</h1>

	<p></p>

<form action="" method="POST">
 <p>Nombre: <input class="form-control" type="text" name="Nombre" size="10"></p>
 <p>Descripcion: <input class="form-control" type="text" name="Descripcion" size="10"></p>
 
 <input type="submit" name="x" value="Registrar">
<br>
</form>
</div>

<?php
 error_reporting(0);

 include "conexion.php";

$Nombre = $_POST['Nombre'];
$Descripcion = $_POST['Descripcion'];

$query="INSERT INTO categoria(Nombre,Descripcion) VALUES 
(?,?)";
$consulta=$pdo->prepare($query);

if ($consulta->execute(array($Nombre,$Descripcion))){
    echo "<script>alert('Se almaceno correctamente');
  window.location.href='formcategoria.php';</script>";
}else{
    echo "";
}

 ?>
</body>
</html>
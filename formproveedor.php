<!DOCTYPE html>
<html>
<head>
	<title>Formulario Proveedores</title>
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

		<h1>Registro de Proveedores</h1>

	<p></p>

<form action="" method="POST">
 <p>Empresa: <input class="form-control" type="text" name="Empresa" size="10"></p>
 <p>Titular: <input class="form-control" type="text" name="Titular" size="10"></p>
 <p>Telefono: <input class="form-control" type="text" name="Telefono"> </p>
 <p>Observaciones: <input class="form-control" type="text" name="Observaciones" size="10"> </p>
 
 <input type="submit" name="x" value="Registrar">
<br>
</form>
</div>

<?php
 error_reporting(0);

 include "conexion.php";

$Empresa = $_POST['Empresa'];
$Titular = $_POST['Titular'];
$Telefono = $_POST['Telefono'];
$Observaciones = $_POST['Observaciones'];


$query="INSERT INTO proveedor(Empresa,Titular,Telefono,Observaciones) VALUES 
(?,?,?,?)";
$consulta=$pdo->prepare($query);

if ($consulta->execute(array($Empresa,$Titular,$Telefono,$Observaciones))){
    echo "<script>alert('Se almaceno correctamente');
  window.location.href='formproveedor.php';</script>";
}else{
    echo "";
}

 ?>
</body>
</html>
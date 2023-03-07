<!DOCTYPE html>
<html>
<head>
	<title>Formulario Clientes</title>
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

		<h1>Registro de Clientes</h1>

	<p></p>

<form action="" method="POST">
 <p>Nombres: <input class="form-control" type="text" name="Nombres" size="10"></p>
 <p>Apellidos: <input class="form-control" type="text" name="Apellidos" size="10"></p>
 <p>Identificacion: <input class="form-control" type="number" name="Identificacion" size="10"></p>
 <p>Telefono: <input class="form-control" type="text" name="Telefono"> </p>
 <p>Correo: <input class="form-control" type="Email" name="Correo" size="10"> </p>
 <p>Contraseña: <input class="form-control" type="password" name="Contraseña" size="10"> </p>
 <p>Direccion: <input class="form-control" type="text" name="Direccion" size="10"> </p>
 <input type="submit" name="x" value="Registrar">
<br>
</form>
</div>

<?php
 error_reporting(0);

 include "conexion.php";

$Nombres = $_POST['Nombres'];
$Apellidos = $_POST['Apellidos'];
$Identificacion = $_POST['Identificacion'];
$Telefono = $_POST['Telefono'];
$Correo = $_POST['Correo'];
$Contraseña = md5($_POST['Contraseña']);
$Direccion = $_POST['Direccion'];

$query="INSERT INTO cliente(Nombres,Apellidos,Identificacion,Telefono,Correo,Contraseña,Direccion) VALUES 
(?,?,?,?,?,?,?)";
$consulta=$pdo->prepare($query);

if ($consulta->execute(array($Nombres,$Apellidos,$Identificacion,$Telefono,$Correo,$Contraseña,$Direccion))){
    echo "<script>alert('Se almaceno correctamente');
  window.location.href='formadministrador.php';</script>";
}else{
    echo "";
}

 ?>
</body>
</html>
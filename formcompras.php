<!DOCTYPE html>
<html>
<head>
	<title>Formulario Compras</title>
	<link href= "css/bootstrap.min.css" rel="stylesheet" media="screen">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src= "js/bootstrap.min.js" ></script>
</head>
<body>

<?php 
include 'navbar.php';
include "conexion2.php";
?>
 
<div class="container">

    <p></p>

		<h1>Registro de Compras</h1>

	<p></p>

<form action="" method="POST">

<p>
<label for="articulo">Articulos</label>
<select id="articulo" class="form-control" name="articulo">
 <option value="">Seleccione Articulo</option>   
<?php
$query_arti = mysqli_query($connection, "SELECT * FROM articulo");
while ($arti = mysqli_fetch_assoc($query_arti)) { 

echo $arti['Id_Articulo'];
    ?>

<option value="<?php echo $arti['Id_Articulo'] ?>"><?php echo $arti['Articulo'] ?></option>
<?php } ?>
</select>
</p>
<p>Factura compra: <input class="form-control" type="text" name="Factura_Compra" size="10"></p>
 
 <p>Cantidad: <input class="form-control" type="number" name="Cantidad" size="10"></p>
 
 <p>Precio Unitario: <input class="form-control" type="number" name="Precio_unitario"> </p>
 <p>Fecha: <input class="form-control" type="date" name="Fecha" size="10"> </p>
 
 <p>
<label for="proveedor">Proveedor</label>

<select id="proveedor" class="form-control" name="proveedor" >
<option value="">Seleccione Proveedor</option>
<?php
$query_prove = mysqli_query($connection, "SELECT * FROM proveedor");
while ($prove = mysqli_fetch_assoc($query_prove)) { ?>
<option value="<?php echo $prove['Id_Proveedor'] ?>"><?php echo $prove['Empresa'] ?></option>
<?php } ?>
</select>
</p>

 <p>Iva:<input type="number" class="form-control"  name="Iva" size="10"> </p>
 <input type="submit" name="x" value="Registrar">
<br>
</form>
</div>

<?php



 if(isset($_POST['x'])){

$Id_articulo = $_POST['articulo'];
$Factura_Compra=$_POST['Factura_Compra'];
$Cantidad = $_POST['Cantidad'];
$Precio_Unitario = $_POST['Precio_unitario'];
$Total=$Cantidad*$Precio_Unitario;
$Fecha = $_POST['Fecha'];
$Id_Proveedor = $_POST['proveedor'];
$Iva = $_POST['Iva'];



$query_insert = mysqli_query($connection, "INSERT INTO compras values ('', '$Id_articulo', '$Factura_Compra', '$Cantidad', '$Precio_Unitario', '$Total', '$Fecha', '$Id_Proveedor', '$Iva')");
                if ($query_insert) {
                    echo "<script>alert('Se almaceno correctamente');
                    window.location.href='formcompras.php';</script>";
                } else {
                    echo "<script>alert('No se almaceno correctamente');
                    window.location.href='formcompras.php';</script>";
                }
            }
 ?>
</body>
</html>
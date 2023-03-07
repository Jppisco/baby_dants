<?php
include '../conexion2.php';
/* A PHP code that is used to insert data into the database. */

if (isset($_POST['x'])) {

	$Id_Categoria = $_POST['categoria'];
	$Articulo = $_POST['Articulo'];
	$Precio_Entrada = $_POST['Precio_Entrada'];
	$Precio_Salida = $_POST['Precio_Salida'];
	$Id_Proveedor = $_POST['proveedor'];
	$Stock = $_POST['Stock'];
	$Descripcion = $_POST['Descripcion'];
	$Imagen = $_FILES['Imagen']['name'];
	move_uploaded_file($_FILES['Imagen']['tmp_name'], $Imagen);


	$query_insert = mysqli_query($connection, "INSERT INTO articulo values ('', '$Id_Categoria', '$Articulo', '$Precio_Entrada', '$Precio_Salida', '$Id_Proveedor', '$Stock', '$Descripcion', '$Imagen')");
	if ($query_insert) {
		echo "<script>alert('Se almaceno correctamente');
                    window.location.href='../formarticulo.php';</script>";
	} else {
		echo "<script>alert('No se almaceno correctamente');
                    window.location.href='../formarticulo.php';</script>";
	}
}

?>
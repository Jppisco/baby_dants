<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Administrador</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="js/bootstrap.min.js"></script>
</head>

<body>

	<div class="container">
		<h1 class="row justify-content-center">ACTUALIZAR</h1>
	</div>
	<br>

	<?php
	if (isset($_GET['Id_Articulo'])) {
		$Id_Articulo = $_GET['Id_Articulo'];
		require_once("../conexion.php");
		$query = "SELECT * FROM articulo WHERE Id_Articulo=$Id_Articulo";
		$consulta = $pdo->prepare($query);
		$consulta->execute();

		if (empty($consulta)) {
			echo "No existen usuarios en el sistema";
		} else {
			$fila = $consulta->fetch();
		}
	}
	?>

	<div class="container">
		<h4 class="row justify-content-center">Actualizar un Articulo</h4>
	</div>
	<div class="container">
		<div class="row justify-content-center">
			<form action="procesos/botonactualizararticulos.php" method="POST">
				<div class="col">
					<input class="form-control" type="hidden" name="Id_Articulo"
						value="<?php echo $fila['Id_Articulo']; ?>">
					<p>
						Id Categoria<input class="form-control" type="text" name="Id_Categoria"
							value="<?php echo $fila['Id_Categoria']; ?>">
						Articulo<input class="form-control" type="text" name="Articulo"
							value="<?php echo $fila['Articulo']; ?>">
						Precio Entrada<input class="form-control" type="number" name="Precio_Entrada"
							value="<?php echo $fila['Precio_Entrada']; ?>">
						Precio Salida<input class="form-control" type="number" name="Precio_Salida"
							value="<?php echo $fila['Precio_Salida']; ?>">
						Id Proveedor<input class="form-control" type="number" name="Id_Proveedor"
							value="<?php echo $fila['Id_Proveedor']; ?>">
						Stock<input class="form-control" type="number" name="Stock"
							value="<?php echo $fila['Stock']; ?>">
					<p>
						Descripcion<input class="form-control" type="text" name="Descripcion"
							value="<?php echo $fila['Descripcion']; ?>">
					<p>
					<p>
						Imagen<input class="form-control" type="file" name="Imagen"
							value="<?php echo $fila['Imagen']; ?>">
					<p>
						<button class="btn btn-primary btn-lg" type="submit" name="Actualizar"><a
								href="procesos/botonactualizararticulos"></a>Actualizar</button>


				</div>
				<br>
				<p class="text-center">
			</form>
		</div>

</body>

</html>
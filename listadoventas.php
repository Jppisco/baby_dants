<!DOCTYPE html> <html lang="es"> <head> <meta charset="UTF-8">
<title>Ventas</title> <link href= "css/bootstrap.min.css"
rel="stylesheet" media="screen"> <meta name="viewport"
content="width=device-width, initial-scale=1"> <script
src= "js/bootstrap.min.js" ></script> </head> <body > 

	<?php
    include "navbar.php"
    ?>
 
<div class="container">
		<h1 align="center">Buscar Ventas</h1>
		<div align="center">
			<form action="" method="POST">
				<input class="form-control"  type="text" name="TextoBuscar">
				<p>
				<p><button class="btn btn-primary btn-lg" type="submit" name="Buscar">Buscar</button>
			</form>
		</div>
	</div>
		<div class="container">
	<table class="table table-success table-striped">
		<thead>
			<tr>
				<th scope="col">Id Ventas</th>
				<th scope="col">Id Articulo</th>
				<th scope="col">Articulo</th>
				<th scope="col">Cantidad</th>
				<th scope="col">Precio Venta</th>
				<th scope="col">Total</th>
				<th scope="col">Fecha Venta</th>
				<th scope="col" colspan="2" align="center">Acciones</th>
			</tr>
		</thead>
		<tbody>
		</div>
			<?php
			require_once "conexion.php";
			require_once "pdo/procesos/seleccionarventas.php";
			?>
		</tbody>
	</table>
</div>
</body>
</html>
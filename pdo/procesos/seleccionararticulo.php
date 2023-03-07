<?php
error_reporting(0);
if (isset($_POST['Buscar']) && isset($_POST['TextoBuscar'])) {
}

$buscar = $_POST['TextoBuscar'];
$buscar = "%$buscar%";

$query = "SELECT * FROM articulo WHERE Id_Articulo LIKE ? OR Id_Categoria LIKE ? OR Articulo LIKE ? OR Precio_Entrada LIKE ? OR Precio_Salida LIKE ? OR Id_Proveedor LIKE ? OR Stock LIKE ? OR Descripcion LIKE ?";

$consulta = $pdo->prepare($query);
$consulta->bindParam(1, $buscar);
$consulta->bindParam(2, $buscar);
$consulta->bindParam(3, $buscar);
$consulta->bindParam(4, $buscar);
$consulta->bindParam(5, $buscar);
$consulta->bindParam(6, $buscar);
$consulta->bindParam(7, $buscar);
$consulta->bindParam(8, $buscar);
$consulta->execute();

if ($consulta->rowCount() >= 1) {
	while ($fila = $consulta->fetch()) { ?>
		<tr>
			<td>
				<?php echo $fila['Id_Articulo'] ?>
			</td>
			<td>
				<?php echo $fila['Id_Categoria'] ?>
			</td>
			<td>
				<?php echo $fila['Articulo'] ?>
			</td>
			<td>
				<?php echo $fila['Precio_Entrada'] ?>
			</td>
			<td>
				<?php echo $fila['Precio_Salida'] ?>
			</td>
			<td>
				<?php echo $fila['Id_Proveedor'] ?>
			</td>
			<td>
				<?php echo $fila['Stock'] ?>
			</td>
			<td>
				<?php echo $fila['Descripcion'] ?>
			</td>

			<td><img src="<?php echo
				$fila['Imagen']; ?>" style="width: 50px; height: auto;">
			</td>
			<td><a href='pdo/actualizararticulos.php?Id_Articulo=<?php echo $fila['Id_Articulo'] ?>'>Editar</a>
			<td><a href='pdo/procesos/eliminararticulo.php ?Id_Articulo=<?php echo $fila['Id_Articulo'] ?>'>Eliminar</a>
		</tr>
		<?php
	}

} else {

	echo "<tr>
			<td colspan=>No hay datos</td>
	</tr>";

}
?>
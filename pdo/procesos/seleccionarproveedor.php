<?php
error_reporting(0);
if (isset($_POST['Buscar']) && isset($_POST['TextoBuscar'])) {
}

$buscar = $_POST['TextoBuscar'];
$buscar = "%$buscar%";

$query = "SELECT * FROM proveedor WHERE Id_Proveedor LIKE ? OR Empresa LIKE ? OR Titular LIKE ? OR Telefono LIKE ?  OR Observaciones LIKE ?  ";

$consulta = $pdo->prepare($query);
$consulta->bindParam(1, $buscar);
$consulta->bindParam(2, $buscar);
$consulta->bindParam(3, $buscar);
$consulta->bindParam(4, $buscar);
$consulta->bindParam(5, $buscar);

$consulta->execute();

if ($consulta->rowCount() >= 1) {
	while ($fila = $consulta->fetch()) { ?>
<tr>
	<td>
		<?php echo $fila['Id_Proveedor'] ?>
	</td>
	<td>
		<?php echo $fila['Empresa'] ?>
	</td>
	<td>
		<?php echo $fila['Titular'] ?>
	</td>
	<td>
		<?php echo $fila['Telefono'] ?>
	</td>
	<td>
		<?php echo $fila['Observaciones'] ?>
	</td>
	<td><a href='pdo/actualizarproveedor.php?Id_Proveedor=<?php echo $fila['Id_Proveedor'] ?>'>Editar</a>
	<td><a href='pdo/eliminaradministrador.php ?Id_Proveedor=<?php echo $fila['Id_Proveedor'] ?>'>Eliminar</a>
</tr>
<?php
	}

} else {

	echo "<tr>
			<td colspan=>No hay datos</td>
	</tr>";

}
?>
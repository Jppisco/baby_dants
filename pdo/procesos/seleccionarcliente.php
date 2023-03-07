<?php
error_reporting(0);
if (isset($_POST['Buscar']) && isset($_POST['TextoBuscar'])) {
}

$buscar = $_POST['TextoBuscar'];
$buscar = "%$buscar%";

$query = "SELECT * FROM cliente WHERE Id_Cliente LIKE ? OR Nombres LIKE ? OR Apellidos LIKE ? OR Identificacion LIKE ?  OR Telefono LIKE ? OR Correo LIKE ? OR Contraseña LIKE ? ";

$consulta = $pdo->prepare($query);
$consulta->bindParam(1, $buscar);
$consulta->bindParam(2, $buscar);
$consulta->bindParam(3, $buscar);
$consulta->bindParam(4, $buscar);
$consulta->bindParam(5, $buscar);
$consulta->bindParam(6, $buscar);
$consulta->bindParam(7, $buscar);
$consulta->execute();

if ($consulta->rowCount() >= 1) {
	while ($fila = $consulta->fetch()) { ?>
<tr>
	<td>
		<?php echo $fila['Id_Cliente'] ?>
	</td>
	<td>
		<?php echo $fila['Nombres'] ?>
	</td>
	<td>
		<?php echo $fila['Apellidos'] ?>
	</td>
	<td>
		<?php echo $fila['Identificacion'] ?>
	</td>
	<td>
		<?php echo $fila['Telefono'] ?>
	</td>
	<td>
		<?php echo $fila['Correo'] ?>
	</td>

	<td><a href='pdo/actualizarcliente.php?Id_Cliente=<?php echo $fila['Id_Cliente'] ?>'>Editar</a>
	<td><a href='../eliminar/eliminaradministrador.php ?Id_Cliente=<?php echo $fila['Id_Cliente'] ?>'>Eliminar</a>
</tr>
<?php
	}

} else {

	echo "<tr>
			<td colspan=>No hay datos</td>
	</tr>";

}
    ?>
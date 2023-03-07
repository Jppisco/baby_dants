<?php
error_reporting(0);
if (isset($_POST['Buscar']) && isset($_POST['TextoBuscar'])) {
}

$buscar=$_POST['TextoBuscar'];
$buscar= "%$buscar%";

$query= "SELECT * FROM compras WHERE Id_Compra LIKE ? OR Id_Articulo LIKE ? OR Articulo LIKE ? OR Cantidad LIKE ? OR Precio_Unitario LIKE ? OR Total LIKE ? OR Fecha LIKE ? OR Id_Proveedor LIKE ? OR Iva LIKE ?";
      
$consulta=$pdo->prepare($query);
 $consulta->bindParam(1,$buscar);
 $consulta->bindParam(2,$buscar);
 $consulta->bindParam(3,$buscar);
 $consulta->bindParam(4,$buscar);
 $consulta->bindParam(5,$buscar);
 $consulta->bindParam(6,$buscar);
 $consulta->bindParam(7,$buscar);
 $consulta->bindParam(8,$buscar);
 $consulta->bindParam(9,$buscar);
 $consulta->execute();

if($consulta->rowCount()>=1){
while ($fila=$consulta->fetch()) {?>
	<tr>
			<td><?php echo $fila['Id_Compra']?></td>
			<td><?php echo $fila['Id_Articulo']?></td>
			<td><?php echo $fila['Articulo']?></td>
			<td><?php echo $fila['Cantidad']?></td>
			<td><?php echo $fila['Precio_Unitario']?></td>
			<td><?php echo $fila['Total']?></td>
			<td><?php echo $fila['Fecha']?></td>
			<td><?php echo $fila['Id_Proveedor']?></td>
			<td><?php echo $fila['Iva']?></td>
			<td><a href='pdo/actualizarcompras.php?Id_Compra=<?php echo $fila['Id_Compra']?>'>Editar</a>
		   <td><a href='pdo/eliminacategoria.php ?Id_Compra=<?php echo $fila['Id_Compra']?>'>Eliminar</a>
	</tr>
	<?php
}	

}else{

echo "<tr>
			<td colspan=>No hay datos</td>
	</tr>";

}
?>
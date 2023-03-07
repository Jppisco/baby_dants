<?php
error_reporting(0);
if (isset($_POST['Buscar']) && isset($_POST['TextoBuscar'])) {
}

$buscar=$_POST['TextoBuscar'];
$buscar= "%$buscar%";

$query= "SELECT * FROM ventas WHERE Id_Ventas LIKE ? OR Id_Articulo LIKE ? OR Articulo LIKE ? OR Cantidad LIKE ?  OR Precio_Venta LIKE ? OR Total LIKE ? OR Fecha LIKE ? ";
      
$consulta=$pdo->prepare($query);
 $consulta->bindParam(1,$buscar);
 $consulta->bindParam(2,$buscar);
 $consulta->bindParam(3,$buscar);
 $consulta->bindParam(4,$buscar);
 $consulta->bindParam(5,$buscar);
 $consulta->bindParam(6,$buscar);
 $consulta->bindParam(7,$buscar);
 
 $consulta->execute();

if($consulta->rowCount()>=1){
while ($fila=$consulta->fetch()) {?>
	<tr>
			<td><?php echo $fila['Id_Ventas']?></td>
			<td><?php echo $fila['Id_Articulo']?></td>
			<td><?php echo $fila['Articulo']?></td>
			<td><?php echo$fila['Cantidad']?></td>
			<td><?php echo$fila['Precio_Venta']?></td>
			<td><?php echo$fila['Total']?></td>
			<td><?php echo$fila['Fecha']?></td>

			<td><a href='pdo/actualizarventas.php?Id_Ventas=<?php echo $fila['Id_Ventas']?>'>Editar</a>
		   <td><a href='../eliminar/eliminaradministrador.php ?Id_Ventas=<?php echo $fila['Id_Ventas']?>'>Eliminar</a>
	</tr>
	<?php
}	

}else{

echo "<tr>
			<td colspan=>No hay datos</td>
	</tr>";

}
?>
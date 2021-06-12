<?php  
	


		include 'model/conexion.php';
		$id = $_GET['id'];

		$sentencia = $bd->prepare("SELECT * FROM productos WHERE ID = ?;");
		$sentencia->execute([$id]);
		$producto = $sentencia->fetch(PDO::FETCH_OBJ);
		//print_r($persona);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar Producto</title>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<h3>Editar Producto:</h3>
		<form method="POST" action="editarProceso.php">
			<table>
				<tr>
					<td>Nombre producto: </td>
					<td><input type="text" name="txt2Nombre" value="<?php echo $producto->nombre_producto; ?>"></td>
				</tr>
				<tr>
					<td>Referencia: </td>
					<td><input type="text" name="txt2Referencia" value="<?php echo $producto->referencia; ; ?>"></td>
				</tr>
				<tr>
					<td>Precio: </td>
					<td><input type="text" name="txt2Precio" value="<?php echo $producto->precio; ?>"></td>
				</tr>
				<tr>
					<td>Peso: </td>
					<td><input type="text" name="txt2Peso" value="<?php echo $producto->peso; ?>"></td>
				</tr>
				<tr>
					<td>categoria: </td>
					<td><input type="text" name="txt2Categoria" value="<?php echo $producto->categoria; ?>"></td>
				</tr>
				<tr>
					<td>Stock: </td>
					<td><input type="text" name="txt2Stock" value="<?php echo $producto->stock; ?>"></td>
				</tr>
				<tr>
					<input type="hidden" name="oculto">
					<input type="hidden" name="id2" value="<?php echo $producto->ID; ?>">
					<td colspan="2"><input type="submit" value="EDITAR PRODUCTO"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>
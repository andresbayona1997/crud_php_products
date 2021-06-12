<?php
include 'model/conexion.php';
$sentencia = $bd->query("SELECT * FROM productos;");
$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Lista de alumnos</title>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<h1>Bienvenido</h1>
		<h3>Lista de productos</h3>
		<table>
			<tr>
				<td>Código</td>
				<td>Nombre producto</td>
				<td>Referencia</td>
				<td>Precio</td>
				<td>Peso</td>
				<td>Categoría</td>
				<td>Stock</td>
				<td>Fecha creación</td>
				<td>Fecha ultima venta</td>
			</tr>

			<?php 
				foreach ($productos as $dato) {
					?>
					<tr>
						<td><?php echo $dato->ID; ?></td>
						<td><?php echo $dato->nombre_producto; ?></td>
						<td><?php echo $dato->referencia; ?></td>
						<td><?php echo $dato->precio; ?></td>
						<td><?php echo $dato->peso; ?></td>
						<td><?php echo $dato->categoria; ?></td>
						<td><?php echo $dato->stock; ?></td>
						<td><?php echo $dato->fecha_creacion; ?></td>
						<td><?php echo $dato->ultima_venta; ?></td>
						<td><a href="vender.php?id=<?php echo $dato->ID; ?>">Vender</a></td>
						<td><a href="editar.php?id=<?php echo $dato->ID; ?>">Editar</a></td>
						<td><a href="eliminar.php?id=<?php echo $dato->ID; ?>">Eliminar</a></td>
					</tr>
					<?php
				}
			?>
			
		</table>

		<!-- inicio insert -->
		<hr>
		<h3>Ingresar producto:</h3>
		<form method="POST" action="insertar.php">
			<table>
				<tr>
					<td>Nombre producto: </td>
					<td><input type="text" name="txtNombre"></td>
				</tr>
				<tr>
					<td>Referencia: </td>
					<td><input type="text" name="txtReferencia"></td>
				</tr>
				<tr>
					<td>Precio: </td>
					<td><input type="text" name="txtPrecio"></td>
				</tr>
				<tr>
					<td>Peso: </td>
					<td><input type="text" name="txtPeso"></td>
				</tr>
				<tr>
					<td>Categoría: </td>
					<td><input type="text" name="txtCategoria"></td>
				</tr>
				<tr>
					<td>Stock: </td>
					<td><input type="text" name="txtStock"></td>
				</tr>
				<input type="hidden" name="oculto" value="1">
				<tr>
					<td><input type="reset" name=""></td>
					<td><input type="submit" value="INGRESAR PRODUCTO"></td>
				</tr>
			</table>
		</form>
		<!-- fin insert-->

	</center>
</body>
</html>
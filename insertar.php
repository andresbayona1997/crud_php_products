<?php  
	
	include 'model/conexion.php';
	$nombre = $_POST['txtNombre'];
	$referencia = $_POST['txtReferencia'];
	$precio = $_POST['txtPrecio'];
	$peso = $_POST['txtPeso'];
	$categoria = $_POST['txtCategoria'];
	$stock = $_POST['txtStock'];

	$sentencia = $bd->prepare("INSERT INTO productos (nombre_producto, referencia, precio, peso, categoria, stock) VALUES (?,?,?,?,?,?);");
	$resultado = $sentencia->execute([$nombre,$referencia,$precio,$peso,$categoria,$stock]);

	if ($resultado === TRUE) {
		//echo "Insertado correctamente";
		header('Location: index.php');
	}else{
		echo "Error";
	}
?>
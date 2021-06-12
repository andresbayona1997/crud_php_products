<?php 

	include 'model/conexion.php';
	$id2 = $_POST['id2'];
	$nombre2 = $_POST['txt2Nombre'];
	$referencia2 = $_POST['txt2Referencia'];
	$precio2 = $_POST['txt2Precio'];
	$peso2 = $_POST['txt2Peso'];
	$categoria2 = $_POST['txt2Categoria'];
	$stock2 = $_POST['txt2Stock'];

	$sentencia = $bd->prepare("UPDATE productos SET nombre_producto = ?, referencia = ?, precio = ?, 
												peso = ?, categoria = ? , stock = ? WHERE ID = ?;");
	$resultado = $sentencia->execute([$nombre2,$referencia2,$precio2,$peso2,$categoria2, $stock2, $id2]);

	if ($resultado === TRUE) {
		header('Location: index.php');
	}else{
		echo "Error";
	}
?>
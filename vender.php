<?php  
	
		include 'model/conexion.php';
		$id = $_GET['id'];

		$sentencia = $bd->prepare("SELECT * FROM productos WHERE ID = ?;");
		$sentencia->execute([$id]);
		$producto = $sentencia->fetch(PDO::FETCH_OBJ);
		//print_r($persona);


        if($producto->stock > 0){
            $stock3 = $producto->stock-1;
            $sentencia = $bd->prepare("UPDATE productos SET stock = ? WHERE ID = ?;");
            $resultado = $sentencia->execute([$stock3, $id]);
            if ($resultado === TRUE) {
                header('Location: index.php');
            }else{
                echo "Error";
            }
        }else{
            echo "No hay stock del producto";
        }


       

?>
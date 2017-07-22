<?php 
	include_once("ManejadorMySql.php");
	$manejadorBD= new ManejadorMySql();
	$manejadorBD->abrirConexion();
	// if (isset($_POST['iniciar'])){
	  echo "presionado";
	  $name = $_POST['name'];
	  $email = $_POST['email'];
	  $cel = $_POST['cel'];
	  $horario = $_POST['horario'];
	  $sucursal = $_POST['sucursal'];
	  echo '<pre>';
	  print_r($_POST);
	echo $manejadorBD->realizarConsulta('insert into clientes (nombre_apellido) values (' . $name . ')');
	// }

	// $pdo = new PDO("mysql:host=localhost;dbname=depilacion_clientes", "root", "");
	// // $stmt = $pdo->prepare('SELECT * FROM clientes WHERE nombre_apellido = :nombre_apellido');
	// // $stmt->bindParam(':nombre_apellido', 'daniel', PDO::PARAM_STR);
	// // $result = $stmt->execute();
	// // $query = $pdo->prepare('SELECT * FROM clientes');
	// $query = $pdo->prepare('insert into clientes (nombre_apellido) values (' . $name . ')');
	// $result = $query->execute();
	// // for($i=0; $row = $query->fetch(); $i++){
 // //        echo $i." - ".$row['nombre_apellido']."<br/>";
 // //      }
 //    if ($conn->query($sql) === TRUE) {
 //   		echo "New record created successfully";
	// } else {
 //   		echo "Error: " . $sql . "<br>" . $conn->error;
	// }
	// print_r($result);
  ?>
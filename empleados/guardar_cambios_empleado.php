<?php
	//Validar si se quiere registrar un nuevo administrador
	if(isset($_POST['Nombre']) && isset($_POST['Telefono']) && isset($_POST['Correo']))
	{
		$Clave_original = $_GET['original'];

		require ("../../BHermanos/conexion.php");
			//Crear la conexion al servidor de base de datos
			$conn = new mysqli($servidor, $usuario, $pwd, $bd);
			
			//Verificar la conexion al servidor de base de datos
				if($conn->connect_error){
					die("Error al registrar empleado: " . $conn->connect_error);
				}

				$Nombre = $_POST['Nombre'];
				$Telefono = $_POST['Telefono'];
				$Correo = $_POST['Correo'];
				$Cargo = $_POST['Cargo'];
				$sql = "UPDATE usuarios SET nombre = '$Nombre', celular = '$Telefono', correo = '$Correo' WHERE idUsuarios = '$Clave_original'";

			if(mysqli_query($conn, $sql)){
				$conn->close();
				header('Location: empleados.php?cambiado=s');
			}else{
				$conn->close();
				header('Location: empleados.php?cambiado=n');
			}
	} 

?>


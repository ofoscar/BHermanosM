<?php
			require ("../../BHermanos/conexion.php");
			//Crear la conexion al servidor de base de datos
			$conn = new mysqli($servidor, $usuario, $pwd, $bd);

			//Verificar la conexion al servidor de base de datos
			if($conn->connect_error){
				die("Error al eliminar Empleado: " . $conn->connect_error);
			}
			$Clave_Eliminar = $_GET['clave'];
			$sql = "DELETE FROM usuarios WHERE idUsuarios = '$Clave_Eliminar'";

			mysqli_query($conn, $sql);
			$conn->close();
?>

<script type="text/javascript">
	alert("Se elimino satisfactoriamente al empleado");
	window.location.href="empleados.php";
</script>

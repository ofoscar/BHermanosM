<?php
/*
session_start();
if(isset($_SESSION['user'])):*/?>
<?php
	include('../../BHermanos/header.php');
	//Confirmar si el empleado ha sido registrado
	if(isset($_GET['registrado'])){
		$resultado = $_GET['registrado'];
		if($resultado=="s"){
			echo"<script> alert('EL EMPLEADO HA SIDO REGISTRADO'); </script>";
		}else
		{
			echo "<script> alert('NO SE PUDO REGISTRAR AL EMPLEADO - ERROR');</script>";
		}
	}
	//Confirmar si la informacion del empleado ha sido cambiada
	if(isset($_GET['cambiado'])){
		$resultado = $_GET['cambiado'];
		if($resultado=="s"){
			echo"<script> alert('LA INFORMACIÓN DEL EMPLEADO HA SIDO MODIFICADA'); </script>";
		}else
		{
			echo "<script> alert('NO SE PUDO MODIFICAR LA INFORMACION DEL EMPLEADO - ERROR');</script>";
		}
	}
?>



<title>Empleados</title>
<link rel="icon" href="../../Bhermanos/IMGS/clientes.ico">
		<form style="background-color: #ff621b; opacity: 0.90;">
			<div style="border: 1px solid #292b2c;" >
				<h4 class="mx-auto" style=" padding:2%; color:white; text-align:center;">EMPLEADOS</h4>
			</div>
        </form>

	<div class="row col-12">
		<div class="col-10"></div>
		<div class="col-2">
			<a href="../../BHermanos/includes/signup.inc.php" class="btn btn-primary">Registrar Empleado</a> 
		</div>
	</div>
	<br>
	<table class="table table-striped table-bordered">
		<tr>
			<th>Opciones</th>
			<th>Numero de Empleado</th>
			<th>Nombre del Empleado</th>
			<th>Celular</th>
			<th>Correo Electronico</th>
		</tr>
		<?php
			require ("../../BHermanos/conexion.php");
			
			//Crear la conexion al servidor de base de datos
			$conn = new mysqli($servidor, $usuario, $pwd, $bd);
			
			//Verificar la conexion al servidor de base de datos
			if($conn->connect_error){
				die("Error al momento de conectar al servidor: " . $conn->connect_error);
			}
			
			//Obtener los registros  de la base de datos
			$sql = "SELECT * from usuarios";
			$result = $conn->query($sql);
			
			if($result->num_rows > 0){
				while($row = $result->fetch_object()){
					echo "<tr>";
						echo "<td><a href='editar_empleado.php?clave=".$row->idUsuarios."'><img src='../../BHermanos/IMGS/editar.png'>Editar</a>
						<a href='eliminar_empleado.php?clave=".$row->idUsuarios."'><img src='../../BHermanos/IMGS/eliminar.png'>Eliminar</a></td>";
						echo "<td>" . $row->idUsuarios . "</td>";
						echo "<td>" . $row->nombre . "</td>";
						echo "<td>" . $row->celular . "</td>";
						echo "<td>" . $row->correo . "</td>";
					echo "</tr>";
				}
				$result->free();
			}
			$conn->close();
		?>
	</table>
	
<?php
	include("../../BHermanos/footer.php");
?>
<?//php else: include_once'login.php'; endif?>
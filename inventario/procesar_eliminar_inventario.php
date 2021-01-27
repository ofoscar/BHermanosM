<?php 
    include ("../../BHermanos/conexion.php");

    //Crear la conexion a la base de datos
    $conexion = new mysqli($servidor,$usuario,$pwd,$bd);

    // //Verificar la conexion al servidor de base de datos
    if($conexion->connect_error){
        die("Error al momento de conectar al servidor : "
         . $conexion->connect_error);
    }

    
        $id  = $_REQUEST['id'];
        
        $modificar = "DELETE FROM sistemainventario WHERE id = '$id'";


        $result = mysqli_query($conexion,$modificar);
        $conexion->close();
        header("location: index.php?");


?>
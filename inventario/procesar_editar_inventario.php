<?php 
    include ("../../BHermanos/conexion.php");

    //Crear la conexion a la base de datos
    $conexion = new mysqli($servidor,$usuario,$pass,$bd);

    // //Verificar la conexion al servidor de base de datos
    if($conexion->connect_error){
        die("Error al momento de conectar al servidor : "
         . $conexion->connect_error);
    }

    
        $id  = $_REQUEST['id'];
        $sucursal = $_POST['sucursal'];
        $marca = $_POST['marca'];
        $nombrezapato = $_POST['nombrezapato'];
        $talla = $_POST['talla'];
        $color = $_POST['color'];
        $precio = $_POST['precio'];
        $existencia = $_POST['existencia'];
        
        $modificar = "UPDATE sistemainventario  
        SET 
        id = '$id',
        sucursal = '$sucursal', 
        marca = '$marca',
        nombrezapato = '$nombrezapato', 
        talla = '$talla', 
        color = '$color' ,
        precio = '$precio',
        existencia = '$existencia' 
        WHERE id = '$id' ";


        $result = mysqli_query($conexion,$modificar);
        $conexion->close();
        header("location: index.php?");


?>
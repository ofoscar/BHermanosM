<?php
include("../../BHermanos/header.php");
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="../index.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;400&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
     <form style="background-color: #ff621b; opacity: 0.90;">
        <div style="border: 1px solid #292b2c;" >
            <h4 class="mx-auto" >INVENTARIO</h4>
        </div>
        </form>

        <!--Contenido de la tabla-->
        
        <div class="m-5">
        <table class="table table-striped table-bordered table-sm ">
        <thead class="">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Sucursal</th>
            <th scope="col">Marca</th>
            <th scope="col">Nombre del Calzado</th>
            <th scope="col">Talla</th>
            <th scope="col">Color</th>
            <th scope="col">Precio</th>
            <th scope="col">Existencia</th>
            <th scope="col"></th>
            <th scope="col"></th>
            </tr>
        </thead>
        
        

    <?php 
    //Crear conexion a la bd
    require("../../BHermanos/conexion.php");

    $conn = new mysqli($servidor,$usuario,$pwd,$bd);

    //Verificar conexion a la bd
    if($conn->connect_error){
        die("Error al momento de conectar al servidor :". $conn->connect_error);
    }

    //Obtener registros de la bd
    $sql = "SELECT * from sistemainventario";
    $result = $conn->query($sql);

    if($result->num_rows>0){
        while($row = $result->fetch_object()){
            echo "<tr>";
                echo "<td>".$row->id . "</td>";
                echo "<td>".$row->sucursal . "</td>";
                echo "<td>".$row->marca . "</td>";
                echo "<td>".$row->nombrezapato . "</td>";
                echo "<td>".$row->talla . "</td>";
                echo "<td>".$row->color . "</td>";
                echo "<td>$".$row->precio . "</td>";
                echo "<td>".$row->existencia . "</td>";
                echo"<td><a href='inventario_editar.php?id=".$row->id."''><button class='btn btn-warning'>Editar</button></a></td>";
                echo"<td><a href='inventario_eliminar.php?id=".$row->id."''><button class='btn btn-danger'>Eliminar</button></a></td>";
            echo "<tr>";
        }
    }
    $conn->close();

    ?>
  
    </table>
    <a href="../../BHermanos/venta/nuevo_articulo.php"><button style="float:right" class="btn btn-primary">Registrar nuevo articulo</button></a>
    </div>
    </body>
    </html>
    <?php 
include("../footer.php");
 ?>
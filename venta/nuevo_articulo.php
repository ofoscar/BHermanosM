<?php
/*
    Nombre: Andrés Treviño Burgos
    Fecha: 10/01/2021
    Este código lo que hace es guardar un zapato con su información, mientras que la info del HTML es 
    autoexplicatoria (se crea un div donde se escriben los datos del zapato), 
    el PHP guarda estos datos y los introduce en la base de datos, además de que guarda la imagen en la 
    carpeta img, esto lo hace con la variable $_target 
*/

include("../../BHermanos/header.php");

$msg = "";
include('includes/connection.inc.php');

    if(isset($_POST['subirImagen']))
    {
        /*Define el objetivo como la carpeta img, y le da el nombre como el nombre del archivo llamado imagen
        el cuál se define abajo en el código de HTML como un input de tipo file*/
        $_target = "img/".basename($_FILES  ['imagen']['name']); 

        //Obtener la información del FORM de abajo
        $_imagen = $_FILES['imagen']['name'];
        $_nombre = $_POST['nombrezapato'];
        $_marca = $_POST['marca'];
        $_precio = $_POST['precio'];
        $_talla = $_POST['talla'];
        $_color = $_POST['color'];
        $_sucursal = $_POST['sucursal'];
        $_existencia = $_POST['existencia'];

        //Guardar la información del FORM en la base de datos
        $sql = "INSERT INTO sistemainventario
        (sucursal, marca, nombrezapato,
         talla, color, precio, img_dir,existencia) 
         VALUES 
         ('$_sucursal','$_marca','$_nombre',$_talla,
         '$_color',$_precio,'$_imagen',$_existencia)";
         mysqli_query($conn,$sql);

         //Mover la imagen a la carpeta img
         if(move_uploaded_file($_FILES['imagen']['tmp_name'],$_target))
         {
             $msg = "Imagen subida exitosamente";
             header('Location: ../../BHermanos/inventario/index.php');
         }
         else
         {
             $msg = "Hubo un problema subiendo la imagen";
             header('Location: ../../BHermanos/inventario/index.php');
         }

    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Añadir Inventario</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/estilo.css">
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    </head>
    <body>
        <h2 class="alinearT">Agregar Zapato</h2>
        <form method="post" action="nuevo_articulo.php" enctype="multipart/form-data">
        <!--Si no entiendes esto que haces en la clase-->
            <div class="display centrar">
                    <label> Nombre del Zapato: </label> <br>
                    <input type="text" name="nombrezapato" required> <br>
                    <label>Marca: </label> <br>
                    <input type="text" name="marca" required> <br>
                    <label>Talla: </label> <br>
                    <input type="number" name="talla" required> <br>
                    <label>Color: </label> <br>
                    <input type="text" name="color" required> <br>
                    <label>Precio: </label> <br>
                    <input type="number" name="precio" required> <br>
                    <label>Sucursal: </label> <br>
                    <input type="text" name="sucursal" required> <br>
                    <label>Existencia: </label> <br>
                    <input type="number" name="existencia" required> <br>
                    <label>Imagen: </label> <br>
                    <input type="file" name="imagen" required> <br>
                    <input type="submit" name="subirImagen" value="Agregar" class="button">
            </div>
        </form>

        <form method="post" action ="../../BHermanos/inventario/index.php">
                <div class="form-group col-md-10">
                    <button type="submit" class="btn btn-primary">Cancelar</button>
                </div>
            </form>
        
    </body>
</html>
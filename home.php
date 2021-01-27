<?php
include("header.php");
if(isset($_SESSION['userId'])){
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
    <div class="banner">
        <div class="capa"></div>
            <div class="info">
                <h1>Bienvenido a BHermanos</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere alias nobis debitis provident ut odio aperiam quibusdam. Amet, neque, illo.</p>
                <a href="#">Leer Màs</a>
            </div>
        </div>
        
    </body>
    </html>

    ';
}
else{
    
    Header("Location: index.php?error=NoHasIniciadoSesion");
}

?>



<?php 
include("footer.php");
 ?>


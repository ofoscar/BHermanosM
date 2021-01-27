<?php
include("../../BHermanos/header.php");

?>

<br><br>
<h4 class="alert alert-danger" role="alert" style="text-align: center; margin-left:415px; margin-right:415px;">Eliminar articulo</h4>
<form class="col-md-5 border border-dark rounded mx-auto" style="padding: 1%;" action="procesar_eliminar_inventario.php?id=echo $row->id" method="POST">

    <?php

    $id = $_REQUEST['id'];

    include("../../BHermanos/conexion.php");

    $conn = new mysqli($servidor, $usuario, $pwd, $bd);

    $sql = "SELECT * from sistemainventario where id ='$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_object();

    ?>

    <div class="form-group"><br>
        <label for="exampleInputEmail1">ID</label>
        <input value="<?php echo $row->id; ?>" type="number" class="form-control" readonly="readonly" name="id" required>
    </div><br>
    <div class="form-group">
        <label for="exampleInputPassword1">Sucursal</label>
        <input value="<?php echo $row->sucursal; ?>"type="text" class="form-control" readonly="readonly" name="sucursal" required>
    </div><br>
    <div class="form-group">
        <label for="exampleInputPassword1">Marca</label>
        <input value="<?php echo $row->marca; ?>" type="text" class="form-control" readonly="readonly" name="marca" required>
    </div><br>
    <div class="form-group">
        <label for="exampleInputPassword1">Nombre del Calzado</label>
        <input value="<?php echo $row->nombrezapato; ?>" type="text" class="form-control"readonly="readonly"  name="nombrezapato" aria-describedby="emailHelp" required>
    </div><br>
    <div class="form-group">
        <label for="">Talla</label>
        <input  value="<?php echo $row->talla; ?>"type="number" class="form-control"  readonly="readonly" name="talla"  required>
    </div><br>
    <div class="form-group">
        <label for="">Color</label>
        <input  value="<?php echo $row->color; ?>"type="text" class="form-control" readonly="readonly" name="color" required>
    </div><br>
    <div class="form-group">
        <label for="">Precio</label>
        <input  value="<?php echo $row->precio; ?>"type="float" class="form-control"  readonly="readonly" name="precio" required>
    </div><br>
    <button type="submit" class="btn btn-warning">Eliminar</button>
    
</form>
<form method="post" action ="../../BHermanos/inventario/index.php">
                <div class="form-group col-md-10">
                    <button type="submit" class="btn btn-primary">Cancelar</button>
                </div>
            </form>

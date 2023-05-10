
<?php
include "modelo/conexion.php";
$id=$_GET["id"];

$sql=$conexion->query("select * from registros where id_pro=$id");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>

<form class="col-3 p-4 m-auto" method="POST">
        <h3 class="text-center text-sencondary"> Editar Productos</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"]?>">

        <?php
        include "controlador/corregir_producto.php";
        while ($datos= $sql->fetch_object()){?>

            <div class="mb-1">
            <label for="nombre" class="form-label">Nombre del Producto</label>
            <input type="text" class="form-control" name="nombre" value="<?=$datos-> Nombre?>">

            <label for="referencia" class="form-label">Referencia</label>
            <input type="text" class="form-control" name="referencia" value="<?=$datos-> Referencia?>">

            <label for="precio" class="form-label">Precio</label>
            <input type="text" class="form-control" name="precio" value="<?=$datos-> Precio?>">

            <label for="peso" class="form-label">Peso</label>
            <input type="text" class="form-control" name="peso" value="<?=$datos-> Peso ?>">

            <label for="categoria" class="form-label">Categoria</label>
            <input type="text" class="form-control" name="categoria" value="<?=$datos-> Categoria ?>">

            <label for="stock" class="form-label">Stock</label>
            <input type="text" class="form-control" name="stock" value="<?=$datos-> Stock ?>">

            <label for="fecha" class="form-label">Fecha de creación</label>
            <input type="date" class="form-control" name="fecha" value="<?=$datos-> Fecha?>">
            
        </div>
        
        <button type="submit" class="btn btn-primary" name="btnregistro" value="ok">Corregir</button>
    </form>
        
    <?php }     
        ?>

        

       
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>



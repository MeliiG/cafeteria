
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafeteria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e479c87153.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="text-center p-4">Inventario Cafeteria</h1>

    <?php
    include "modelo/conexion.php";
    include "controlador/eliminar_producto.php"
    ?>

    <div class="container-fluid row">
    <form class="col-3 p-4" method="POST">
        <h3 class="text-center text-sencndary"> Registro de Productos</h3>
        
        <?php
        include "modelo/conexion.php";
        include "controlador/registro_producto.php";
        ?>

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del Producto</label>
            <input type="text" class="form-control" name="nombre">

            <label for="referencia" class="form-label">Referencia</label>
            <input type="text" class="form-control" name="referencia">

            <label for="precio" class="form-label">Precio</label>
            <input type="text" class="form-control" name="precio">

            <label for="peso" class="form-label">Peso</label>
            <input type="text" class="form-control" name="peso">

            <label for="categoria" class="form-label">Categoria</label>
            <input type="text" class="form-control" name="categoria">

            <label for="stock" class="form-label">Stock</label>
            <input type="text" class="form-control" name="stock">

            <label for="fecha" class="form-label">Fecha de creación</label>
            <input type="date" class="form-control" name="fecha">
            
        </div>
        <button type="submit" class="btn btn-primary" name="btnregistro" value="ok">Enviar</button>
        </form>

        <div class="col-8 p-4">
            <table class="table table-dark table-hover">
                <thead >
                    <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Referencia</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Peso</th>
                    <th scope="col">categoria</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Fecha</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $sql=$conexion->query('select * from registros');
                    while($datos= $sql->fetch_object()){?>
                    <tr>
                        
                    <td><?=$datos->id_pro?></td>
                    <td><?=$datos->Nombre?></td>
                    <td><?=$datos->Referencia?></td>
                    <td><?=$datos->Precio?></td>
                    <td><?=$datos->Peso?></td>
                    <td><?=$datos->Categoria?></td>
                    <td><?=$datos->Stock?></td>
                    <td><?=$datos->Fecha?></td>      
                    <td>
                        <a href="listadoproductos.php?id=<?=$datos->id_pro?>" class="btn btn-button btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
                        <a href="index.php?id=<?=$datos->id_pro?>" class="btn btn-button btn-danger"><i class="fa-solid fa-delete-left"></i></a>
                    </td>               
                    </tr>
                    
                        
                <?php }
                    ?>                   
                    
                </tbody>
            </table>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
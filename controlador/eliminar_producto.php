<?php

if(!empty($_GET["id"])){
    $id=$_GET["id"];
    $sql=$conexion->query(" delete from registros where id_pro=$id ");

    if ($sql==1) {
        echo "<div> Producto eliminado</div>";
    } else {
        echo "<div> error no se elimino </div>";
    }
    

}

?>
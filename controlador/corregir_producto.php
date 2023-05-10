
<?php


if(!empty($_POST["btnregistro"])){

    if(!empty($_POST["nombre"]) and 
    !empty($_POST["referencia"]) and 
    !empty($_POST["precio"]) and
    !empty($_POST["peso"]) and
    !empty($_POST["categoria"]) and
    !empty($_POST["stock"]) and
    !empty($_POST["fecha"])) {

        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $referencia=$_POST["referencia"];
        $precio=$_POST["precio"];
        $peso=$_POST["peso"];
        $categoria=$_POST["categoria"];
        $stock=$_POST["stock"];
        $fecha=$_POST["fecha"];

        $sql=$conexion->query("update registros set Nombre='$nombre', Referencia='$referencia', Precio=$precio, Peso=$peso, Categoria='$categoria', Stock=$stock, Fecha='$fecha' where id_pro = $id ");
        var_dump($sql);
        if($sql==1){
            header("location:index.php");
        }
        else{
            echo "<div class='alert alert-danger'> error al corregir producto </div>";
        }
    
    }
    else{
        echo "<div class='alert alert-warning'> hay campo vacios </div>";
    }
}
?>
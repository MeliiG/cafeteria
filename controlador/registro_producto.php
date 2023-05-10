<?php

if(!empty($_POST["btnregistro"])){

    if(!empty($_POST["nombre"]) and 
    !empty($_POST["referencia"]) and 
    !empty($_POST["precio"]) and
    !empty($_POST["peso"]) and
    !empty($_POST["categoria"]) and
    !empty($_POST["stock"]) and
    !empty($_POST["fecha"])) {


        $nombre=$_POST["nombre"];
        $referencia=$_POST["referencia"];
        $precio=$_POST["precio"];
        $peso=$_POST["peso"];
        $categoria=$_POST["categoria"];
        $stock=$_POST["stock"];
        $fecha=$_POST["fecha"];

        $sql=$conexion->query("insert into registros(nombre,referencia,precio,peso,categoria,stock,fecha) values('$nombre','$referencia','$precio','peso','categoria','stock','fecha' )");
        
        if($sql==1){
            echo'<div class="alert alert-success">producto registrado correctamente </div>';
        }
        else{
            echo'<div class="alert alert-danger">Error al registrar producto </div>';
        }
    }  
    else{
        echo'<div class="alert alert-warning">alguno de los campos esta vacio </div>';
    }

}


?>
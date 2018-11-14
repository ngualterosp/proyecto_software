<?php

#LLAMADA A LA PLANTILLA
//se usa como el controlador de todo el proyecto


class MVCcontrolador{

    public function plantilla1(){
        include "plantilla1.php";
    }



#INTERACCION DEL USUARIO
    public function enlacesPaginasControlador(){

        if(isset($_GET["action"])){
        $enlacesControlador = $_GET["action"];
    }
    else{
        $enlacesControlador = "index.php";
    }
        $respuesta = EnlacesPaginas::enlacesPaginasModelo($enlacesControlador);
        include $respuesta;

}
}
?>

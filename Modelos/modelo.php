<?php


class EnlacesPaginas{

public function enlacesPaginasModelo($enlacesModelo){

    if(
    $enlacesModelo == "login" ||
    $enlacesModelo == "noticias" ||
    $enlacesModelo == "giras" ||
    $enlacesModelo == "ruedaprensayfans" ||
    $enlacesModelo == "banda" ){
        $modulo = "".$enlacesModelo.".php";
    }
    else if($enlacesModelo == "index"){
        $modulo = "plantilla1.php";
    }

    else{
        $modulo = "plantilla1.php";

    }
    return $modulo;
}

}
?>

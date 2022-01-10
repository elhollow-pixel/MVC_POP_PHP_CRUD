
<?php 
    /* Ruteador: canalizar siertos elementos o entrar 
    al controlador*/
    /*echo $controlador;
    echo $accion;*/

    include_once("controladores/controlador_".$controlador.".php");

    $objeto_Controlador = "Controlador_".$controlador;
    $controlador = new $objeto_Controlador;
    $controlador->$accion();

?>
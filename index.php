<?php  
  /*  Include_once y Require_once
  Funcionan exactamente de la misma forma que las anteriores
  salvo que impiden la carga de un mismo fichero varias veces.*/
  $controlador="paginas";
  $accion="inicio";
  
  if( isset($_GET['controlador']) && isset($_GET['accion']) ){
    if( ($_GET['controlador']!="") && ($_GET['accion'])!="" ){
      $controlador = $_GET['controlador'];
      $accion = $_GET['accion'];
    }
  }

  require_once("vistas/template.php");
?>
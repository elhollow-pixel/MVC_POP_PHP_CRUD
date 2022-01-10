<?php
    include_once("modelos/empleado.php");
    include_once("conexion.php");

    class Controlador_empleados{

        public function inicio(){
            $empleado=Empleado::consultar();
            //print_r($empleado);
            include_once("vistas/empleados/inicio.php");
        }

        public function crear(){
            if($_POST){
                //print_r($_POST);
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $correo = $_POST['correo'];
                
                Empleado::crear($nombre,$apellido,$correo);
                header("location:./?controlador=empleados&accion=inicio");
                
            }
            include_once("vistas/empleados/crear.php");
        }

        public function editar(){

            if($_POST){
                $id = $_POST['id'];
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $correo = $_POST['correo'];

                Empleado::editar($id, $nombre, $apellido, $correo);
                header("location:./?controlador=empleados&accion=inicio");
               // print_r($_POST);
            }

            $id = $_GET['id'];
            if($_GET){
                //print_r(Empleado::buscar($id));
                $b_empleado=Empleado::buscar($id);
            }

            include_once("vistas/empleados/editar.php");
        }

        public function borrar(){
            //aplicar validaciones
            //print_r($_GET);
            $id = $_GET['id'];
            Empleado::borrar($id);
            header("location:./?controlador=empleados&accion=inicio");
        }

    }
?>
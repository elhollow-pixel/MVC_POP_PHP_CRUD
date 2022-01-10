<?php
    class Empleado{
        public $id;
        public $nombre;
        public $apellido;
        public $correo;

        function __construct($id, $nombre, $apellido, $correo){
            $this->id=$id;
            $this->nombre=$nombre;
            $this->apellido=$apellido;
            $this->correo=$correo;
        }
        
        public static function consultar(){
            $listaEmpleados=[];
            $conexion=conexion::crearInstancia();
            $sql = $conexion->query("SELECT * FROM empleados");
            
            //fetchAll ->obtener todos los registros
            foreach($sql->fetchAll() as $empleado){
                $listaEmpleados[] = new Empleado($empleado['id'],$empleado['nombre'],$empleado['apellido'],$empleado['correo']);
            }

            return $listaEmpleados;
        }

        public static function crear($nombre, $apellido, $correo){
            
            $conexion=conexion::crearInstancia();

            $sql = $conexion->prepare("INSERT INTO empleados(nombre, apellido, correo) VALUES(?,?,?)");
            $sql->execute(array($nombre,$apellido,$correo));
        }

        public static function borrar($id){
            $conexion=conexion::crearInstancia();
            $sql = $conexion->prepare("DELETE FROM empleados WHERE id=?");
            $sql->execute(array($id));
            // el ? sera remplazado por $id
        }

        public static function buscar($id){
            $conexion=conexion::crearInstancia();
            $sql = $conexion->prepare("SELECT * FROM empleados WHERE id=?");
            $sql->execute(array($id));
            // el ? sera remplazado por $id
            //fetch ->recuperar el registro
            $empleado = $sql->fetch();
            return new Empleado($empleado['id'],$empleado['nombre'],$empleado['apellido'],$empleado['correo']);;
        }

        public static function editar($id, $nombre, $apellido, $correo){
            $conexion=conexion::crearInstancia();

            $sql = $conexion->prepare("UPDATE empleados SET nombre=?, apellido=?, correo=? WHERE id=?");
            $sql->execute(array($nombre,$apellido,$correo,$id));
        }
    }
?>
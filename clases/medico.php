<?php
    include('./connection.php');
    class persona{
        private $personas;
        public function __construct()
        {
            $this ->personas = array();
        }
        public function crear_persona($id_persona, $Nombre1, $Nombre2, $Apellido1, $Apellido2, $fecha_nacimiento){
            $sql = "SELECT id_persona FROM personas WHERE id_persona = $id_persona";
            $respuesta = mysqli_query(connection::conn(),$sql);
            if($resultado = mysqli_fetch_assoc($respuesta) )
            {
                echo "<script type='text/javascript'>
                alert('la persona con la identificación $id_persona ya existe');
                window.location='Index.php'
                </script>";      
            }
            else 
            {
                $sql = "INSERT INTO personas VALUES ('$id_persona', '$Nombre1', '$Nombre2', '$Apellido1', '$Apellido1', '$fecha_nacimiento')";
                $respuesta = mysqli_query(connection::conn(),$sql);
                echo "<script type='text/javascript'>
                alert('la persona se inserto correctamente');
                window.location='Index.php'
                </script>";
            }

        }
    }

?>
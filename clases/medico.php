<?php 
include('./connection.php');
 class medico
 {
    private $medico;
    public function __construct()
    {
        $this->medico = array();
    }

     public function insertar($usuario,$pass,$id_persona,$especialidad)
     {
         $sql = "INSERT INTO medico VALUES ($usuario,$pass,$id_persona,$especialidad)";
         $resultado = mysqli_query(connection::conn(),$sql);

     }

     public function inicio_session($usuario,$pass)
     {
         $sql = "SELECT * FROM admin WHERE usuario = '$usuario' AND pass = '$pass'";
         $resultado = mysqli_query(connection::conn(),$sql);
         if($fila= mysqli_fetch_assoc($resultado))
         {
            return true ;
         }
         else 
         {
            return false;
         }
     }
     

     


 }

?>
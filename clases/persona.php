<?php
include('./connection.php');
class persona 
{
    private $persona;
    public function __construct()
    {
        $this->persona = array();
    }
    public function ver_personas()
    {
        $sql = "SELECT * FROM personas";
        $resultado = mysqli_query(connection::conn(),$sql);
        while($fila = mysqli_fetch_assoc($resultado))
        {
            $this->persona[] = $fila;           
        } 
        return $this->persona;
    }
    public function insertar
    ($id_persona,$Nombre1,$Nombre2,$Apellido1,$Apellido2,$fecha_nacimiento)
    {
        $sql = "INSERT INTO personas VALUES ('$id_persona','$Nombre1','$Nombre2','$Apellido1','$Apellido2','$fecha_nacimiento');";
        $resultado = mysqli_query(connection::conn(),$sql);
    }
    public function eliminar($id_persona)
    {
        $sql = "DELETE FROM personas WHERE id_persona = '$id_persona'";
        $resultado = mysqli_query(connection::conn(),$sql);
    }
    public function get_persona($id_persona)
    {
        $sql = "SELECT * FROM personas WHERE id_persona = '$id_persona'";
        $resultado = mysqli_query(connection::conn(),$sql);
        while($fila = mysqli_fetch_assoc($resultado))
        {
            $this->persona[] = $fila;           
        } 
        return $this->persona;
    } 

}
?>
<?php
 include('./connection.php');
 class paciente
 {
    private $paciente;
    public function __construct()
    {
        $this->paciente = array();
    }
    public function insertar($id_paciente,$pc_user,$pc_password,$peso,$altura,$edad,$RH)
    {
        $sql = "INSERT INTO paciente VALUE($id_paciente,$pc_user,$pc_password,$peso,$altura,$edad,$RH)";
        $resultado = mysqli_query(connection::conn(),$sql);
    }
    

 }
 
?>
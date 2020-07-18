<?php 
    include('./connection.php');
    class admin
    {
        private $admin;
        public function __construct()
        {
            $this->admin = array();
        }
        public function insertar($id_admin,$ad_pass,$add_user)
        {
            $sql = "INSERT INTO admin VALUES($id_admin,$ad_pass,$add_user)";
            $resultado = mysqli_query(connection::conn(),$sql);
        }
        public function inicio_session($ad_pass,$add_user)
        {
            $sql = "SELECT * FROM admin WHERE ad_pass = '$ad_pass' AND add_user = '$add_user'";
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
<?php
class connection 
{
    public static function conn (){
        $link = mysqli_connect('localhost','root','');
        mysqli_query($link,"SET NAMES 'utf8'");
         mysqli_select_db($link,'hospital
         ');
 	    return $link; 
    }
}
?>
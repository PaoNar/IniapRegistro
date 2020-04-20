<?php
 
   include_once '../Conexion/conexion2.php';
             

    class DataBase{
         
        public function buscarUsuario($cedula,$clave){
            $array = null;
            $conexion=conexion();
            $sql = "select * from agr_usuario where ci =':$cedula' and clave =':$clave'";
            $statement= pg_query($conexion,$sql);
            
           
        }
        
    }
?>
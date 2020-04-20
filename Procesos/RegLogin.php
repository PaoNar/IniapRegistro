<?php
    session_start();
    include_once '../Conexion/conexion2.php';
   
    $conexion=conexion();

    $cedula =$_POST['cedula'];
    $clave = $_POST['clave'];

        
        if($cedula == 0 && $clave == 0){
            
            echo '<div class="alert alert-danger" role="alert">
            <strong>Porfavor registrese aqui!</strong></div>';
           
            }else{
                
            $sql = "select * from agr_usuario where ci='$cedula' and clave='$clave'";
            $result=pg_query($conexion,$sql);

            echo '<div class="alert alert-danger" role="alert">
            <strong>Se ha conectado!</strong></div>';
             echo ' <script> location.href="../Registro/indexlogin.php";</script>';

  

            
    }

            




?>
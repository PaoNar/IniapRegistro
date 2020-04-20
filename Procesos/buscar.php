<?php

session_start();

   include_once '../Conexion/conexion2.php';
    require_once('DataBase.php');

    $cedula = $_POST['ci'];
    $clave = $_POST['clave'];

    if(isset($cedula)){
        $buscar = new DataBase();
        $mensaje = $buscar->buscarUsuario($cedula,$clave);
        
        if($mensaje){
            echo '<div class="alert alert-danger" role="alert">
    <strong>DENTRO CON EXITO!</strong></div>';
        }else{
             echo '<div class="alert alert-danger" role="alert">
    <strong>ERROR!</strong></div>';

    
            

        }
        //echo $mensaje;
        //echo"<div><br><a href= '../Paginas/pagina1.html'>Regresar</a></div>";
    }
?>
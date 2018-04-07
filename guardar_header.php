<?php

    //Conexion en la base de datos

    //Version de desarrollo
    $conectar = @mysqli_connect('localhost','root','luiseslaley');

    //Version de desarrollo
    //$conectar = @mysqli_connect('localhost','root',''); 

    //verificamos conexion
    if(!$conectar){
        echo "<script>toastr.success('Se encontro la base de datos.'); window.history.go(-1);</script>";
    }else{
        $base = @mysqli_select_db($conectar,'appsoluciones');
        if(!$base){
            echo"No se encontro la base de datos";
        }
    }

    //Recuperar datos del formulario
    $nombre = $_POST['form-name'];
    $email = $_POST['form-email'];    
    $mensaje = $_POST['form-mensaje'];
    
    //Setencia SQL
    $sql = "INSERT INTO datos(Nombre,Email,Mensaje) VALUES('$nombre','$email', '$mensaje')";

    //Ejecutamos la sentencia
    $ejecutar = mysqli_query($conectar, $sql);
    

    //Verificamos la ejecucion
    if(!$ejecutar){
        echo "<script>alert('Intente nuevamente'); window.history.go(-1);</script>";    
    }else{        
        echo "<script>alert('Mensaje Enviado Correctamente, nos pondremos en contacto lo antes posible'); window.history.go(-1);</script>";
    }

?>
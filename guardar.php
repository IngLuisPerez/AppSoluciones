<?php
    // phpinfo();
    //Conexion en la base de datos
    
    //Version de desarrollo
    $conectar = @mysqli_connect('localhost','root','luiseslaley');

    //Version de desarrollo
    //$conectar = @mysqli_connect('localhost','root',''); 

    //verificamos conexion
    if(!$conectar){
        echo "No se pudo conectar con el servidor";
    }else{
        $base = @mysqli_select_db($conectar,'appsoluciones');
        if(!$base){
            echo"No se encontro la base de datos";
        }
    }

    //Recuperar datos del formulario
    $nombre = $_POST['form-name'];
    $email = $_POST['form-email'];
    $asunto = $_POST['form-asunto'];
    $mensaje = $_POST['form-mensaje'];
    // $fecha = new DateTime();

    //Setencia SQL
    $sql = "INSERT INTO datos(Nombre,Email,Asunto,Mensaje) VALUES('$nombre','$email','$asunto', '$mensaje')";

    //Ejecutamos la sentencia
    $ejecutar = mysqli_query($conectar, $sql);
    

    //Verificamos la ejecucion
    if(!$ejecutar){
        echo "<script>alert('Intente nuevamente'); window.history.go(-1);</script>";    
    }else{
        echo "<script>alert('Mensaje Enviado Correctamente, nos pondremos en contacto lo antes posible'); window.history.go(-1);</script>";
    }
?>
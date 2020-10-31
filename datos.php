


<?php

    $usuario = "root"; 
    $password = "";  
    $servidor = "localhost"; 
    $basededatos ="reservas"; 



$conexion = mysqli_connect  ($servidor,$usuario,"") or die ("Error con el servidor de la Base de datos"); 



$db = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la Base de datos");



     $nombre=$_POST['nombre']; 
    $ocupacion=$_POST['motivo'];
    $destino=$_POST['telefono'];
    $precio=$_POST['hora'];
    $fecha=$_POST['fecha']; 

    //sentencia sql
     $sql="INSERT INTO reservas VALUES ('$nombre','$ocupacion','$destino','$precio','$fecha')"; 

    $ejecutar=mysqli_query($conexion, $sql);



    if(!$ejecutar){
    	 echo '<script>alert("huvo algun error")</script> ';
         echo "<script>location.href='reserva.php'</script>";	
    }else{
        echo '<script>alert("Su reserva se a realizado correctamente ")</script> ';
        
        echo "<script>location.href='inicio.php'</script>";	
    }
     
?>﻿
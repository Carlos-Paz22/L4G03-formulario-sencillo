<?php
//Datos de conexion
    $host="localhost";
    $user="root";
    $password= "";
    $bd="personas";

    //Crear la conexion
    $con= new mysqli($host, $user, $password, $bd);

    //Prueba de conexion
    if($con->connect_error){
        echo "No se ha logrado establecer conexion.";
    }else{
        echo "Conectados a la base de datos. <br>";
    }
    $nombre= $_POST["nombre"];
    $email= $_POST["email"];

    //echo "La informacion enviada es:
        //Nombre: $nombre Email $email";
    $query="insert into personas(nombres,email)
                values('$nombre', '$email')";
  if($con->query($query))  {//$con->query($query)==true es lo mismo o se puede omitir
      echo "Persona guardad correctamente";
  }else{
      echo"No se logro guardar la persona".$con->error;
  }
    $con->close();

    header('Location: crear.php');

?>
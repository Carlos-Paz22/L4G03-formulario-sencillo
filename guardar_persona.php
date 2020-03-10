<?php
include('includes/db.php');

$nombre= $_POST["nombre"];
$email= $_POST["email"];

$sql="insert into personas(nombres,email)
values('$nombre', '$email')";

if($nombre=="" || $email==""){

}else{


  

   
  if(DB::query($sql))  {//$con->query($query)==true es lo mismo o se puede omitir
      echo "Persona guardad correctamente";
  }else{
      echo"No se logro guardar la persona".$conexion->error;
  }

}
    header('Location: crear.php');

?>
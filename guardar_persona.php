<?php 
    include('includes/db.php');

    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];

   
    if($nombre=="" || $email==""){

    }else{
    if(isset($id) == false){
        header('Location: crear.php');
        $sql = "insert into personas(nombre,email)values('$nombre', '$email')"; 
    }else{
        header('Location: index.php');
        $sql = "UPDATE personas set nombre='$nombre', email='$email' WHERE id='$id'";
    }
    }
    DB::query($sql);
?>
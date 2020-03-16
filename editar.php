<?php 
include('includes/db.php');
if(isset($_GET["id"])==false){//iset para validar parametros
 echo "Es necesario enviar un id";
 die; //  para ocultar el error para cortarlo como un break
}

$id =$_GET["id"];
$sql="select*from personas where id= $id";
$persona=DB::query($sql);

//var_dump($persona); ver lo que contiene persona
$persona=mysqli_fetch_object($persona);
//var_dump($persona->nombres);indicar que persona esta en el array

//if($persona==false){ funciona igual lo de abajo
    if(!$persona){

    echo "El usuario no existe";
    die;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form-group{
            display: flex;
            flex-direction: column;
        }
    </style>
</head>
<body>
    <form action="guardar_persona.php" method="post">
        <div>
            <h3>Editar Usuarios</h1>
        </div>
        <input type="hidden" name="id" value="<?= $persona->id ?>">
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="nombre" value="<?= $persona->nombre ?>">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email" value="<?= $persona->email ?>">
        </div>
        <div>
            <button type="submit">Guardar</button>
            <a href="index.php">Volver</a>
        </div>
    </form>
</body>
</html>
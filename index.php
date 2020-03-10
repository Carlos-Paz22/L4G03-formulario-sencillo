<?php 
include('includes/db.php');
//DB::init();

	

	 //$conexion= new mysqli($host, $user, $password, $bd);

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body>

<br>

	<table border="1" >
	<tr>
	<td colspan=3><h2>Datos guardados en la base<h2></td>
	</tr>
	
		<tr>
	

			<td>id</td>
			<td>nombres</td>
			<td>email</td>
			
		</tr>

		<?php 
		$sql="SELECT * from personas";
		$result=DB::query($sql);
		//$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id'] ?></td>
			<td><?php echo $mostrar['nombres'] ?></td>	
			<td><?php echo $mostrar['email'] ?></td>
		
		</tr>
	
	<?php 
	}
	 ?>
	</table>
	<br>
	<a  href="crear.php">Registrar nuevo usuario</a>
</body>
</html>
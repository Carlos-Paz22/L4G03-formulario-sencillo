<br>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>Crear usuarios<h2>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">

				<form class="login100-form validate-form" action="guardar_persona.php" method="post" >
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required" >
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="nombre" placeholder="Enter username"required>
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="email is required">
						<span class="label-input100">Email </span>
						<input class="input100" type="text" name="email" placeholder="Enter email"required>
						<span class="focus-input100"></span>
					</div>
					

	

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Guardar
							
						</button>
						<br>
						<a  href="index.php">Mostrar datos registrados</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
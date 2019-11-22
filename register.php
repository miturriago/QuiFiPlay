<?php 
require 'database.php';
$message = '';


if (!empty($_POST['email'])&&!empty($_POST['pass'])&&!empty($_POST['pass2'])&&!empty($_POST['nombre'])&&!empty($_POST['escuela'])&&!empty($_POST['idescuela'])) {
	$contr=$_POST['pass'];
	$contr2=$_POST['pass2'];
	if($contr==$contr2){
		$sql="INSERT INTO user (nombre, email, contrasena, escuela, idescuela) VALUES(:nombre,:email,:pass,:escuela,:idescuela)";
		$stmt=$conn->prepare($sql);
		$stmt->bindParam(':nombre', $_POST['nombre']);
		$stmt->bindParam(':email', $_POST['email']);
		$stmt->bindParam(':pass', $_POST['pass']);
		$stmt->bindParam(':escuela', $_POST['escuela']);
		$stmt->bindParam(':idescuela', $_POST['idescuela']);

    if ($stmt->execute()) {
	  $message = 'Successfully';
	  header('Location: tc.php');
    } else {
      $message = 'Sorry';
	}
}else{
	$message = 'Las contraseñas no coinciden';

}
	}else{
		$message = 'Debe llenar todos los campos';
	}
 ?>

<!DOCTYPE html>
<html>
<head>
<title> Registrarse | QuiFiPlay </title>
<meta name="viewport" content=width=device-wodth, initial-sacale=1">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style type="text/css">
	*{
		box-sizing:border-box;
	}
	body{
		background:url('images/fond.jpg');
		background-size: cover;
	}
	.wrap{
		max-width: 400px;
		margin: auto;
		margin-top: 50px;
		padding: 20px;
		font-family: sans-serif;
		background: #fff;
		border-radius: 10px;
	}
	.wrap h2{
		font-size: 2em;
		text-align: center;
	}
	button{
		padding: 10px;
		width: 49%;
		box-sizing: border-box;
		border: none;
		font-size: 1.3em;
		border-radius: 10px;
		font-weight: bold;
	}
	button a{
		text-decoration: none;
		color: #fff;
	}
	.fb{
		background: blue;
	}
	.gg{
		background: red;
	}
	button:hover{
		background: rgba(0,0,0,0.6);
	}
	.fa{
		font-size: 1.3em;
		font-weight: bold;
	}
	form{
		margin-top: 30px;
	}
	input[type=text],input[type=password],input[type=submit]{
		width:100%;
		padding: 10px;
		margin-bottom: 15px;
		font-size: 17px;
		border-radius: 5px;
		outline: none;
		border: none;
		border:2px solid gray;
	}

	label{
		font-size: 20px;
		font-weight: bold;
	}
	input[type=submit]{
		background: green;
		border:none;
		color: #fff;
		font-size: 20px;
		font-weight:bold;
		margin-top: 20px;
		padding: 15px;
		cursor: pointer;
	}
	input[type=submit]:hover{
		background: rgba(0,0,0,0.6);
	}
	p{
		text-align: center;
	}
	p a{
		text-decoration: none;
		font-weight: bold;
	}

</style>
</head>
<body>

	<div class="wrap">
		<h2> Registrarse</h2>

		<?php if(!empty($message)): ?>
      	<p> <?= $message ?></p>
    	<?php endif; ?>		

		<form action="register.php" method="POST">
			<label> Nombre:</label><br>
			<input type="text" name="nombre">
			<label>Correo: </label>
			<input type="text" name="email">
			<label> Nombre de la escuela</label><br>
			<input type="text" name="escuela">
			<label> id de la escuela</label><br>
			<input type="text" name="idescuela">

			<label>Contraseña: </label>
			<input type="password" name="pass">
			<label>Vuelve a repetir la contraseña: </label>
			<input type="password" name="pass2">
			
			<input type="submit" value="Registrarse">
			<p> ¿Ya tiene una cuenta? <a href="admin.php"> Click aquí </a></p>
			

		</form>
		
<a href="index.php"><img src="images/regresar.png" height="50" width="100" alt="Botón"></a>
		</div>


</body>
</html>
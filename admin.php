<?php
  session_start();
  require 'database.php';
  if (!empty($_POST['email']) && !empty($_POST['pass'])) {
    $records = $conn->prepare('SELECT nombre, email, contrasena FROM user WHERE email = :email and contrasena= :pass');
	$records->bindParam(':email', $_POST['email']);
	$records->bindParam(':pass', $_POST['pass']);
    $message = '';
    if ($records->execute()) {
		$results = $records->fetch(PDO::FETCH_ASSOC);
		$cantidad=1;
			header("Location: admin2.php");
		
		


    } else {
      $message = 'Verifique sus datos';
    }
  }else{
	$message = 'Debe llenar todos los campos';

}
?>


<!DOCTYPE html>
<html>
<head>
<title> Ingresar | QuiFiPlay </title>

<meta name="viewport" content=width=device-wodth, initial-sacale=1>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style type="text/css">
	*{
		box-sizing:border-box;
	}
	body{
		background:url('images/fondoadmin.jpg');
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
		<h2> Ingresar </h2>
		<?php if(!empty($message)): ?>
      	<p> <?= $message ?></p>
    	<?php endif; ?>		
		<form action="admin.php" method="post">
			<label> Usuario:</label><br>
			<input type="text" name='email'>
			<label>Contraseña: </label>
			<input type="password" name='pass'>
			<input type="submit" value="Ingresar">
		</form>
		<p> ¿No tiene una cuenta? <a href="#"> Comuníquese </a></p>
<a href="index.php"><img src="images/regresar.png" height="50" width="100" alt="Botón"></a>

</body>
</html>
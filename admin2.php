<?php
session_start();
	include "conexion.php";

  
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Panel de Administración</title>
	<link rel="stylesheet" type="text/css" href="./css/estiloAdm.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
	<header>
		
		<a id="cerrar" href="logout.php">Salir</a>
	</header>
	<section>

	<center><h1 id="titulo">USUARIOS</h1></center>
	<table border="0px" width="100%">	
		<tr id="titles">
			<td>ID</td>
			<td>NOMBRE</td>
			<td>EMAIL</td>
		</tr>	

		<?php
			$re=mysqli_query($obj_conexion,"select * from estudiante");
			$numeroventa=0;
			while ($f=mysqli_fetch_array($re)) {
					
					echo '<tr id="opc1">
						<td>'.$f['id'].'</td>
						<td>'.$f['nombre'].'</td>
						<td>'.$f['email'].'</td>
					</tr>';
			}
		?>
	</table>
	</section>
</body>
</html>
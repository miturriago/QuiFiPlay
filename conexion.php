<?php
	$server="localhost";
	$username="root";
	$password="";
	$db='quifiplay';
	/*$con=mysqli_connect($server,$username,$password)or die("no se ha podido establecer la conexion");
	$sdb=mysqli_select_db($db,$con)or die("la base de datos no existe");*/

	$obj_conexion = mysqli_connect($server,$username,$password,$db);
	if(!$obj_conexion)
	{
	    echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
	}
?>
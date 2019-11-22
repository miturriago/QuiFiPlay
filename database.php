<?php 
	$server = 'localhost';
	$username='root';
	$pass='';
	$database='quifiplay';

	try {
		$conn = new PDO("mysql:host=$server;dbname=$database;",$username,$pass);
		
	} catch (PDOException $e) {
		die('Connection failed: '.$e->getMessage());
	}
 ?>
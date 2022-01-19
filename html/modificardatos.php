<?php
	session_start();
	include('conexion_bbdd.php');

	$texto = $_POST["comentarios"];
	$username = $_SESSION['username'];

	$query = "UPDATE datos set sobremi = '$texto' where username = '$username'";
    $result = mysqli_query($connection, $query);
	
	header("Location: " . "user_page.php");



?>
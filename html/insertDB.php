<?php
  include("conexion_bbdd.php");
?>

<?php
	// Often these are form values in $_POST
	$ID = (int) 7;
	$username = 'juanfran12';
  $nombre = 'Juan';
  $apellidos = 'Fran';
  $telefono = 123456765;
  $contrasena = 54321;
  $nif = '87654321Q';
  $tipo_usuario = 'particular';
	
	$query = "INSERT INTO datos (nombre, apellido, username, telefono, contrasena, nif, tipo_usuario) VALUES ('$nombre', '$apellidos', '$username', '$telefono', '$contrasena', '$nif', '$tipo_usuario')";
	echo "<script>console.log($query);</script>";
	
	$result = mysqli_query($connection, $query);
  if(!$result){
      echo "<script>console.log('Error al insertar datos en la base de datos.<br>' );</script>";
      die("Database query failed. " . mysqli_error($connection));
  } else {
      echo "<script>console.log('Datos insertados correctamente.<br>' );</script>";
      /*die("Database query failed. " . mysqli_error($connection));*/
  }   
?>

<?php
  mysqli_close($connection);
?>
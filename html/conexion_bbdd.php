<?php
//Datos para la conexión
  // 1. Create a database connection
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "root";
  $dbname = "usuarios";
  $tablename= "datos";
  $dbport = 3308;
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, $dbport);
  if ($connection) {
    echo "<script>console.log('Conexión establecida.<br>' );</script>";
  } else {
    echo "<script>console.log('Conexión fallida.<br>' );</script>";
  }
?>
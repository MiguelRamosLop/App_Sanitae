<?php
	session_start();
?>

    <?php include('conexion_bbdd.php') ?>
        <?php
            $nombre = $_POST["nombre"];
            $apellidos = $_POST["apellidos"];
            $username = $_POST["username"];
            $telefono = $_POST["telefono"];
            $contrasena = $_POST["contrasena"];
            $nif = $_POST["nif"];
            $sobremi = "No he escrito nada todavia";

            function find_user_by_username($username,  $connection) {


                $safe_username = mysqli_real_escape_string($connection, $username);
                
                $query  = "SELECT * ";
                $query .= "FROM datos ";
                $query .= "WHERE username = '$username'";
                $query .= "LIMIT 1";  //Como username es primario no lo necesito
                echo "$query <br>";
                $user_set = mysqli_query($connection, $query);
                if (!$user_set) {
                    die("Database query failed.");
                }
                
                if($user = mysqli_fetch_assoc($user_set)) {
                    return $user;
                } else {
                    return null;
                }
            }

            function attempt_login($username, $connection) {
                $user = find_user_by_username($username, $connection);
                if ($user) {
                    return $user;
            }
                    
                    else {
                    return false;
                }
            }

            $found_user = attempt_login($username, $connection);
            if ($found_user) {
                header("Location: " . "signup_page2.php");	
            }
                
            else {
                        //Encriptar password
                        $query  = "INSERT INTO datos (";
                        $query .= "  `nombre`, `apellido`,`username`, `telefono`,`contrasena`,`nif`,`sobremi`";
                        $query .= ") VALUES (";
                        $query .= " '$nombre', '$apellidos', '$username', '$telefono', '$contrasena', '$nif', '$sobremi' ";
                        $query .= ")";
                
                        $result = mysqli_query($connection, $query);

                        if ($result) {
                            echo "El usuario se ha agregado correctamente";
                            header("Location: " . "login_page.php");
                        } else {
                            die("Database query failed. " . mysqli_error($connection));
                }
            }

            mysqli_close($connection);

?>


<?php session_start(); ?>

<?php
    include('conexion_bbdd.php') 
?>
<?php include 'navbar.php' ?>
<?php
	function find_user_by_username($username, $password, $connection) {
		
		$safe_username = mysqli_real_escape_string($connection, $username);
		$query  = "SELECT * ";
		$query .= "FROM datos ";
		$query .= "WHERE username = '$username'";
		$query .= "AND contrasena = '$password'";
		$query .= "LIMIT 1";  //Como username es primario no lo necesito
		echo "$query <br>";
		$user_set = mysqli_query($connection, $query);
		if (!$user_set) {
			die("Database query failed.");
		}
		
		if($user = mysqli_fetch_assoc($user_set)) {
			print_r($user);
			return $user;
		} else {
			return null;
		}
	}

    function attempt_login($username, $password, $connection) {
		$user = find_user_by_username($username,$password, $connection);
		if ($user) {
			//user encontrado
			//print_r($user);
			
			return $user;
   		} else {
			// user not found
			//echo "Usuario no encontrado";
			return false;
		}
		
	}

	if(isset($_POST['username'])) { 
		// check if the username has been set
		$username = $_POST["username"];
	}
	if(isset($_POST['password'])) { 
		// check if the username has been set
		$password = $_POST["password"];
	}
	// Solo para ver si se estan mandando bien los datos echo $_POST['password'];
	//echo $_POST['username'];
    $found_user = attempt_login($username, $password, $connection);
    if ($found_user) {
      // Success

			if(password_verify($password,$found_user["password"])){
                header("Location: " . "login_page2.php");
            }
            else{
                header("Location: " . "home_page.php");
            }
		
     
    } else {
      // Failure
	  //header("Location: " . "login_page2.php");
    }

    mysqli_close($connection);
?>
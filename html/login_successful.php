<?php session_start(); ?>

<?php
    include('conexion_bbdd.php') 
?>
<?php include 'navbar.php' ?>
<?php
	function find_user_by_username($username, $password, $connection) {
		
		$safe_username = mysqli_real_escape_string($connection, $username);
		$query  = "SELECT contrasena ";
		$query .= "FROM datos ";
		$query .= "WHERE username = '$username'";
		$query .= "LIMIT 1";  //Como username es primario no lo necesito
		echo "$query <br>";
		$user_set = mysqli_query($connection, $query);
		if (!$user_set) {
			die("Database query failed.");
		}
		if($user_set->num_rows>0){
			while($row = $user_set->fetch_assoc()){
				$sqlpassword = $row["contrasena"];
			}

			if($sqlpassword == $password){
				//User bien, pass bien
                header("Location: " . "home_page.php");
            }
            else{
				//User bien, pass mal
                header("Location: " . "login_page2.php");
            }
		}
		else{
			//User mal
			header("Location: " . "login_page2.php");
		}

		if($user = mysqli_fetch_assoc($user_set)) {
			return $user;
		} else {
			return null;
		}
	}

    function attempt_login($username, $password, $connection) {
		$user = find_user_by_username($username,$password, $connection);
		if ($user) {
			return $user;
   			} else {
			return false;
		}
		
		}

		$username = $_POST["username"];
		$password = $_POST["password"];

    	$found_user = attempt_login($username, $password, $connection);
	


	 



    	mysqli_close($connection);
?>
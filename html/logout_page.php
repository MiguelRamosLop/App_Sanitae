<?php
	session_start();
	session_destroy();
?>

<html>
<head>
	<meta charset="UTF-8"/>
	<title>Pagina temporal</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
</head>
<body>
	<div class="logout_message"><h2> Hasta Pronto!!!! </h2>
            <p> Has cerrado sesion <br>
			<br>
			<button class="btn" onclick="window.location.href='login_page.php'"> Volver a inicio &#8594;</button>
            </p>
			<img class= "image" src="resources/images/Logo_Sanitae.png" alt="Sanitae" width="206px">
    </div>
</body>
</html>
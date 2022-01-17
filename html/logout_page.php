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
<nav class="navbar">
    <div class="brand_title">
        <img class= "image" src="resources/images/Logo_Sanitae.png" alt="Logo Sanitae" width="160px">
    </div>
    <a href="#" class="toggle_button">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </a>
    <div class="navbar_links">
        <ul>
            <li>
                <a href="../html/home_page.php"> Inicio </a>
            </li>
            <li>
                <a href="../html/FAQs_page.php"> FAQs </a>
            </li>
            <li>
                <a href="../html/campaigns_page.php"> Campañas </a>
            </li>
            <li>
                <a href="../html/login_page.php"> Iniciar Sesión </a>
            </li>
            </ul>
    </div>
</nav>  
	<div class="logout_message"><h2> Hasta Pronto!!!! </h2>
            <p> Has cerrado sesion <br>
			<br>
			<button class="btn" onclick="window.location.href='login_page.php'"> Volver a inicio &#8594;</button>
            </p>
    </div>
    <?php include 'footer.html' ?>
</body>
</html>
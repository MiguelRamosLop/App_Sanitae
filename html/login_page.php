<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
    <section class = "login_bg_container">
        <div class = "center">
        <?php
	          if(isset($_SESSION['username'])){
        
		          echo "<p>Has iniciado sesion: " . $_SESSION['username'] . "";
		          echo "<p><a href='logout_page.php'>Cerrar Sesion</a></p>";
	        }else {
        ?>
            <h1> Accede a tu Área Privada </h1>
            <form method="post" action="home_page.php">
                <div class="text_field">
                    <input type="text" name="username" placeholder="Nombre de usuario">
                </div>
                <div class="text_field">
                    <input type="password" name="password" placeholder="Contraseña">
                </div>
                <div class="button_container">
                    <button type="submit" name="login" class="default_btn"> Entrar </button>
                </div>
                <div class="registrate_link"> 
                    ¿No tienes cuenta? <a href="../html/signup_page.php"> Regístrate Aquí &#8594; </a></div>
            </form>
        <?php
                }
        ?>
        </div>
        <div class="push"> </div>
    </section>
    <?php include 'footer.html' ?>
    <script type="text/javascript">
            const toggleBtn = document.querySelector('.toggle_button');

            const navbar_links = document.querySelector('.navbar_links');

            toggleBtn.addEventListener('click', function() {
                navbar_links.classList.toggle('active');
            });
    </script>
</body>
</html>
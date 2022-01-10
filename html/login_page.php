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
	          if(isset($_SESSION['uname'])){
		          echo "<p>Has iniciado sesion: " . $_SESSION['uname'] . "";
		          echo "<p><a href='pagina3.php'>Cerrar Sesion</a></p>";
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
                    ¿No tienes cuenta? <a href="../html/signup_page.php"> Regístrate Aquí </a></div>
            </form>
        <?php
                }
        ?>
        </div>
        <div class="push"> </div>
    </section>
    <footer>
        <div class="footer">
            <div class="footer_col_1">
                <h3 class="footer_text"> Descarga nuestra app oficial </h3>
                <div class="desc">
                    <img class= "image" src="resources/images/app_store.JPG" alt="Sanitae" width="300px">

                </div>
            </div>
            <div class="footer_col_2">
                <div><h3 class="footer_text"> Sanitae Foundation</h3></div>
                <div class="footer2"><img class= "image" src="resources/images/Logo_Sanitae.png" alt="Sanitae" width="206px"></div>
                <div class="caja_flex">
                    <p class="footer_2_text"> © 2022 Sanitae Foundation</p>
                </div>
            </div>
            <div class="footer_col_3">
                <h3 class="footer_text"> Redes sociales </h3>
                <div class="caja_flex">
                    <ul class="redes">
                        <li class="a"><a href="#"><img src="resources/images/Facebook.png" alt="facebook" width="25" height="25"></a></li>
                        <li class="a"><a href="#"><img src="resources/images/Twitter.png" alt="twitter" width="25" height="25"></a></li>
                        <li class="a"><a href="#"><img src="resources/images/Telegram.png" alt="telegram" width="25" height="25"></a></li>
                        <li class="a"><a href="#"><img src="resources/images/LinkedIn.png" alt="linkedin" width="25" height="25"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="./js/navbar_script.js"></script>
</body>
</html>
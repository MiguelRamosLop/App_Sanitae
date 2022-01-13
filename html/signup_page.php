<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up page</title>
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
                        <?php
                        if(isset($_POST['username'])){
                            $_SESSION['username'] = $_POST['username']; ?>
                        <a href="user_page.php"><img src="resources/images/user.png" alt="user" width="25" height="25"></a></li>
                    <li>
                    <a href="logout_page.php"><img src="resources/images/log-out.png" alt="user" width="25" height="25"></a>
                        <?php
                        } else {
                            if(isset($_SESSION['username'])){ ?>
                                <a href="user_page.php"><img src="resources/images/user.png" alt="user" width="25" height="25"></a></li>
                    <li>
                    <a href="logout_page.php"><img src="resources/images/log-out.png" alt="user" width="25" height="25"></a>
                            <?php
                            } else { ?>
                            <a href="../html/login_page.php"> Iniciar Sesión </a>
                    <?php     }
                        } ?>
                        
                    
                    </li>
                </ul>
        </div>
    </nav>
    <div class="signup_bg_container">
        <div class="center">
            <h1> Bienvenido a Sanitae </h1>
            <form method="post" action="home_page.php">
                <div class="text_field_nom_ape">
                    <input type="text" name="nombre" placeholder="Nombre">
                    <input type="password" name="apellidos" placeholder="Apellidos">
                </div>
                <div class="text_field">
                    <input type="text" name="username" placeholder="Nombre de usuario">
                </div>
                <div class="text_field">
                    <input type="text" name="telefono" placeholder="Teléfono">
                </div>
                <div class="text_field">
                    <input type="password" name="password" placeholder="Contraseña">
                </div>
                <div class="text_field">
                    <input type="password" name="password" placeholder="Repite contraseña">
                </div>
                <div class="text_field">
                    <input type="text" name="nif" placeholder="NIF">
                </div>
                <div class="text_field">
                    <input type="text" name="nacimiento" placeholder="Fecha de nacimiento (dd/mm/yyyy)">
                </div> 
                <div class="radio_button_signup">
                    <p> <strong> Tipo de usuario: </strong> </p>
                    <label class="rbtn"> <strong> Particular </strong> 
                        <input type="radio" checked="checked" name="radio">
                        <span class="checkmark"></span>
                      </label>
                      <label class="rbtn"> <strong> Empresa </strong>
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                      </label>
                </div>
                <div class="text_field">
                    <button type="submit" name="login" class="default_btn"> Continuar </button>
                </div>
                <div class="text_field">
                    <a href="#" class="condiciones"> Revisar terminos y condiciones </a>
                </div>
            </form>
        </div>
        <div class="push"> </div>
    </div>

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
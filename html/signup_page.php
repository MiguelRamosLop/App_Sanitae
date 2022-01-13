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
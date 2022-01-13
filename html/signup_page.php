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
                <form method="post" action="home_page.php" id="basic-form">
                    <div class="text_field_nom_ape">
                        <input type="text" name="nombre" placeholder="Nombre">
                        <input type="text" name="apellidos" placeholder="Apellidos">
                    </div>
                    <div class="text_field">
                        <input type="text" name="username" placeholder="Nombre de usuario">
                    </div>
                    <div class="text_field">
                        <input type="text" name="telefono" placeholder="Teléfono">
                    </div>
                    <div class="text_field">
                        <input type="password" name="password" placeholder="Contraseña" id="password">
                    </div>
                    <div class="text_field">
                        <input type="password" name="repite_password" placeholder="Repite contraseña" id="repite_password">
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
                        <br>
                    </div>
                    <div class="text_field">
                        <button type="submit" name="login" class="default_btn"> Registrarme &#8594; </button>
                    </div>
                </form>
            </div>
            <div class="push"> </div>
        </div>
        <?php include 'footer.html' ?>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js" crossorigin="anonymous"></script>
        <script type="text/javascript">
            const toggleBtn = document.querySelector('.toggle_button');

            const navbar_links = document.querySelector('.navbar_links');

            toggleBtn.addEventListener('click', function() {
                navbar_links.classList.toggle('active');
            });

            $(document).ready(function() {
                $("#basic-form").validate({
                    rules: {
                        nombre: {
                            required: true
                        },
                        apellidos: {
                            required: true
                        },
                        username: {
                            required: true
                        },
                        telefono: {
                            required: true,
                            minlength: 9,
                            maxlength: 9
                        },
                        password: {
                            required: true,
                            minlength: 5,
                        },
                        repite_password: {
                            required: true,
                            equalTo: "#password"
                        },
                        nif: {
                            required: true,
                            minlength: 9
                        },
                        nacimiento: {
                            required: true,
                            minlength: 8,
                            maxlength: 10
                        }
                    },
                    messages: {
                        nombre: {
                            required: "Campo requerido"
                        },
                        apellidos: {
                            required: "Campo requerido"
                        },
                        username: {
                            required: "Campo requerido"
                        },
                        telefono: {
                            required: "Campo requerido",
                            minlength: "Proporciona un teléfono en formato válido",
                            maxlength: "Proporciona un teléfono en formato válido"
                        },
                        password: {
                            required: "Campo requerido",
                            minlength: "Tu contraseña debe tener al menos 5 caracteres"
                        },
                        repite_password: {
                            required: "Campo requerido",
                            equalTo: "Las contraseñas no coinciden"
                        }, 
                        nif: {
                            required: "Campo requerido",
                            minlength: "Proporciona un NIF válido"
                        },
                        nacimiento: {
                            required: "Campo requerido",
                            minlength: "Proporciona una fecha de nacimiento en el formato especificado"
                        }
                    }
                });
            });
        </script>
    </body>
</html>
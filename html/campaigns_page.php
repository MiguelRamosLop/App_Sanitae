<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Campaigns Page</title>
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
        <div class = "campaigns_container">
            <h1> Nuestras Campañas </h1>   
            <h2> Destacadas</h2>
            <div class="cajas">
                <div class="caja_texto"><h2> Mascarillas y lámparas quirúrgicas </h2>
                    <img class="producto" src="../html/resources/images/mascarillas_en_hospitales.jpeg"  alt="aparato de anestesiología">
                    <p> Ofrece una mejor asistencia hospitalaria mediante donaciones de mascarillas 
                        y aparatos de anestesiología. Durante este periodo pasado de pandemia se estan 
                        derrochando grandes cantidades de mascarillas, ayuda a recaudar fondos para poder 
                        contar siempre con mascarillas en buen estado para todos. Además, pese al elevado 
                        precio de los aparatos de anestesiología resulta muy complejo para algunos hospitales
                        publicos poder acceder a ellos.<br>
                        <strong> Con Sanitae ayudas mucho, con muy poco. </strong>
                    </p>
                    <div class="card_footer">
                        <a class="info" href="#"> Más información</a>
                        <button class='button_donar' onclick="window.location.href='../html/donations_page.php'">  Donar </button>
                        <img class="rounded-circle" src="https://i.imgur.com/KcxKRBm.jpg" width="30">
                        <img class="rounded-circle" src="../html/resources/images/profile_photo.JPG" width="30">
                        <img class="rounded-circle" src="https://i.imgur.com/UL0GS75.jpg" width="30">
                        <a class="info" href="#"> +13 </a>
                    </div>
                </div>
                <div class="caja_texto"><h2> Respiradores y monitores de signos vitales. </h2>
                    <img class="product" src="../html/resources/images/Marcapasos.jpg"  alt="marcapasos">
                    <p> Durante la pandemia, los respiradores junto a las mascarillas, fueron los materiales 
                        hospitalarios más usuados. Contribuye tanto la cantidad como la calidad de estos
                        con el fin de que no existan conflictos por su uso. Los monitores de signos vitales para pacientes 
                        son considerados instrumentos médicos básicos y una pieza estándar dentro 
                        del mundo hospitalario por lo que las donaciones siempre ayudan. <br>
                        <strong> Con Sanitae ayudas mucho, con muy poco. </strong>
                    </p>
                    <div class="card_footer">
                        <a class="info" href="#"> Más información</a>
                        <button class='button_donar'>  Donar </button>
                        <img class="rounded-circle" src="https://i.imgur.com/KcxKRBm.jpg" width="30">
                        <img class="rounded-circle" src="../html/resources/images/profile_photo.JPG" width="30">
                        <img class="rounded-circle" src="https://i.imgur.com/UL0GS75.jpg" width="30">
                        <a class="info" href="#"> +17 </a>
                    </div>
                </div>
                <div class="caja_texto"><h2> Electrocardiógrafos y Desfibriladores </h2>
                    <img class="producto" src="../html/resources/images/desfribrilador.jpg"  alt="desfibrilador">
                    <p> Absolutamente siempre debe haber disponibilidad de estos aparatos médicos, 
                        sea cual sea la demanda dentro del hospital en un determinado momento.
                        Los desfibriladores son necesarios en situaciones de riesgo de vida por lo que donaciones
                        con este objetivo siempre es bienvenida. <br>
                        <strong> Con Sanitae ayudas mucho, con muy poco. </strong>
                    </p>
                    <div class="card_footer">
                        <a class="info" href="#"> Más información</a>
                        <button class='button_donar'>  Donar </button>
                        <img class="rounded-circle" src="https://i.imgur.com/KcxKRBm.jpg" width="30">
                        <img class="rounded-circle" src="../html/resources/images/profile_photo.JPG" width="30">
                        <img class="rounded-circle" src="https://i.imgur.com/UL0GS75.jpg" width="30">
                        <a class="info" href="#"> +5 </a>
                    </div>
                </div>
                <div class="caja_texto"><h2> Materiales enfocados a la investigación </h2>
                    <img class="product" src="../html/resources/images/investigacion.JPG"  alt="microoscopio">
                    <p> Contrubuye a mejorar en nivel de investigación en los hospitales madrileños 
                        mediante la donación de diversos materiales como microoscopios con el fin de poder
                        conseguir que existan cuantas más facilidades posibles para la adecuada atención medica.<br>
                        <strong> Con Sanitae ayudas mucho, con muy poco. </strong>
                    </p>
                    <div class="card_footer">
                        <a class="info" href="#"> Más información</a>
                        <button class='button_donar'>  Donar </button>
                        <img class="rounded-circle" src="https://i.imgur.com/KcxKRBm.jpg" width="30">
                        <img class="rounded-circle" src="../html/resources/images/profile_photo.JPG" width="30">
                        <img class="rounded-circle" src="https://i.imgur.com/UL0GS75.jpg" width="30">
                        <a class="info" href="#"> +20 </a>
                    </div>
                </div>
            </div>
            <div class="page_btns">
                <span>&#10094;</span>
                <span>1</span>
                <span>2</span>
                <span>3</span>
                <span>4</span>
                <span>&#10095;</span>
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
        <script type="text/javascript" src="./js/script.js"></script>
    </body>
</html>
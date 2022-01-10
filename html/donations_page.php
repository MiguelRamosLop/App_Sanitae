<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Donations Page</title>
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

        <div class="donation_container">
            <h1> Mascarillas y lámparas quirúrgicas </h1>   
            <div class="cajas">
                <div class="caja_texto">
                    <h2> Descripción de la campaña </h2>
                        <img class="producto" src="../html/resources/images/mascarillas_en_hospitales.jpeg"  alt="aparato de anestesiología">
                        <p> Ofrece una mejor asistencia hospitalaria mediante donaciones de mascarillas 
                            y aparatos de anestesiología. Durante este periodo pasado de pandemia se estan 
                            derrochando grandes cantidades de mascarillas, ayuda a recaudar fondos para poder 
                            contar siempre con mascarillas en buen estado para todos. Además, pese al elevado 
                            precio de los aparatos de anestesiología resulta muy complejo para algunos hospitales
                            publicos poder acceder a ellos.<br>
                            <br>
                            La recaudación que se quiere alcanzar es de <strong> $1,000.00. </strong> <br>
                            <br>
                        </p>
                        <h3> Campaña disponible en los hospitales: </h3>
                        <div class="caja_flex">
                            <ul class="colaboraciones">
                                <li class="a"><a href="#"><img src="resources/images/Hospital_12_oct.jpg" alt="logo hospital 12 de octubre madrid" width="200px"></a></li>
                                <li class="a"><a href="#"><img src="resources/images/Hospital_La_Paz.JPG" alt="logo hospital la paz madrid" width="200px"></a></li>
                            </ul>
                        </div>
                </div>
                <div class="caja_texto">
                    <h2> Realiza tu contribución </h2>
                    <p>
                        Contribuye a la campaña de mascarillas y aparatos de anestesiología aportando tu propio
                        grano de arena con la cantidad que desees. Recuerda que la campaña está disponible solo
                        en los hospitales indicados. Con Sanitae, ayudas con muy poco.
                        <br> 
                        <br>
                    </p>
                    <div class="loading_bar" data-label=" Obtenido: $479,00 (47,5%)"> </div> 
                    <div class="cifra_container">
                        <label for="name">Introduce la cifra a donar ( Formato: $DD,DD): $</label>
                        <input type="text" class="cifra" name="cifra" required minlength="6" maxlength="6" size="6">
                    </div>  
                    <div class="radio_button_signup">
                        <p> Escoge el hospital a donar:  </p>
                        <label class="rbtn">  Hospital Universidtario de La Paz 
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                        </label>
                        <label class="rbtn"> Hospital Universitario 12 de octubre 
                            <input type="radio" name="radio">
                            <span class="checkmark"></span>
                        </label>
                    </div>   
                    <p> Escoge una forma de realizar la donación: </p>  
                    <div class="caja_flex">
                        <ul class="metodos_pago">
                            <li class="visa"><a href="#"><img src="resources/images/visa.JPG" alt="visa" width="75px"></a></li>
                            <li class="paypal"><a href="#"><img src="resources/images/paypal.JPG" alt="paypal" width="80px"></a></li>
                            <li class="mastercard"><a href="#"><img src="resources/images/mastercard.JPG" alt="mastercard" width="80px"></a></li>
                            <li class="bizum"><a href="#"><img src="resources/images/bizum.JPG" alt="bizum" width="80px"></a></li>
                        </ul>
                    </div>         
                    <div class="donacion_formalizar_container">
                        <button class="default_btn"> Formalizar la donación </button>
                    </div>
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
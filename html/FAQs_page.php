<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQS Page</title>
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
    <section class="section_faqs">
        <div class="container_faqs">
            <h1> Preguntas frecuentes</h1>
            <div class="accordion">
               <div class="accordion_item" id="question1">
                   <a class="accordion_link" href="#question1">
                        ¿Cómo puedo registrarme?
                       <span>&#9776;</span>
                   </a>
                   <div class="answer">
                       <p>
                            El proceso es sencillo. Solo hay que completar diferentes campos personales
                            y crear un username y una contraseña.
                       </p>
                    </div>
               </div> 
               
               <div class="accordion_item" id="question2">
                   <a class="accordion_link" href="#question2">
                       ¿Cómo funcionan las donaciones? 
                       <span>&#9776;</span>
                   </a>
                   <div class="answer">
                        <p>
                            Se deberá escoger una campaña y realizar la donacion mediante las formas de 
                            pago disponibles. 
                       </p>
                    </div>
               </div> 
               <div class="accordion_item" id="question3">
                   <a class="accordion_link" href="#question3">
                       ¿A qué hospitales puedo donar?
                       <span>&#9776;</span>
                   </a>
                   <div class="answer">
                       <p>
                            Las hospitales a los que van destinadas las donaciones 
                            varían respecto a las necesidades de cada uno.
                       </p>
                    </div>
               </div> 
               
               <div class="accordion_item" id="question4">
                   <a class="accordion_link" href="#question4">
                       ¿Todo el proceso es legal?
                       <span>&#9776;</span>
                   </a>
                   <div class="answer">
                       <p>
                            Claro,trabajamos activamente con los hospitales más importantes
                            de Madrid teniendo cientos de donaciones al día.
                       </p>
                    </div>
               </div> 
            </div>
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
    <script type="text/javascript" src="./js/script.js"></script>
</body>
</html>
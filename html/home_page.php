<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home Page</title>
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
                        <?php
                        if(isset($_POST['username'])){
                            $_SESSION['username'] = $_POST['username'];
                            echo "Bienvenido: " .$_SESSION['username'];
                        } else {
                            if(isset($_SESSION['username'])){
                                echo "Sesion: ".$_SESSION['username'];
                            } else { ?>
                            <a href="../html/login_page.php"> Iniciar Sesión </a>
                    <?php     }
                        } ?>
                        
                    
                    </li>
                </ul>
            </div>
        </nav>
        
        <div class="grid_container_p">
            <div class="caja_grid">
            </div>
            <div class="caja_grid">
                <p class="top_text"> Sanitae </p>
                <p class="medium_text"> Con Sanitae ayudas mucho, con muy poco. </p>
                <p class="small_text">
                    Sanitae es una empresa de crowfunding que permite que cualquier persona 
                    pueda aportar su grano de arena al sector sanitario realizando donaciones voluntarias 
                    que supondrán una mejora en el material sanitario de los hospitales públicos madrileños
                    más salpicados por estos momentos de escasez.
                    Todo hospital debe contar con los aparatos y equipos médicos correctos y para garantizar
                    la calidad y estabilidad de estos se necesita la contribución de todos. Y recuerda, con Sanitae ayudas mucho, con muy poco.
                </p>
                <div class="button_container">
                    <button class="btn" onclick="window.location.href='../html/campaigns_page.php'"> Nuestras Campañas &#8594;</button>
                </div>
            </div>
            
        </div>
        <div class="grid_container_c">
            <div class="caja_grid">
                <img src="resources/images/Emoji_ 1.JPG" alt="Emoji1">
                <p>Tu participación es clave. 
                    Puedes donar una pequeña 
                    parte que contribuirá 
                    a un gran fin.</p>
            </div>
            <div class="caja_grid">
                <img src="resources/images/Emoji_2.JPG" alt="Emoji2">
                <p>Tanto el material a donar 
                    como el hospital al que será donado 
                    será elección tuya. Con ello podrás 
                    ayudar al hospital 
                    que tu más desees.</p>
            </div>
            <div class="caja_grid">
                <img src="resources/images/Emoji_3.JPG" alt="Emoji3">
                <p> Configuración simple. 
                    Podrás comenzar el proceso 
                    de donación fácilmente,
                    solo es necesario registrarse. </p>
            </div>
            <div class="caja_grid">
                <img src="resources/images/Emoji_4.JPG" alt="Emoji4">
                <p>Nunca ayudar había sido tan sencillo. 
                    Involúcrate y aporta tu grano de arena 
                    a esta causa. </p>
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
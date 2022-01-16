<?php
	session_start();

    //if(isset($_POST['username'])){}
    //else{header("Location: " . "login_page.php");}
?>
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
    <?php include 'navbar.php' ?>
    <?php
    
    ?>
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
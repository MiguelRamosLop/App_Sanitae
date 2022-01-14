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
        <?php include 'navbar.php' ?>   
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
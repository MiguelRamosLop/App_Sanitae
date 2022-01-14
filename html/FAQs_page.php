<?php
	session_start();
?>
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
    <?php include 'navbar.php' ?>
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
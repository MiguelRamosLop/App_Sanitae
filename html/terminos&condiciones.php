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
        <div class="terminos_container">
            <h1> Terminos y condiciones </h1>
            <div class="center_terms">
                <h2> Términos </h2>
                <p> Las presentes condiciones generales (en adelante, las “Condiciones Generales”) de uso 
                    del sitio web tienen por objeto establecer los términos y condiciones de acceso y uso de 
                    www.sanitae.com, así como las distintas páginas web que la integran (en adelante, el “Portal”) 
                    que son propiedad SANITAE REAL ESTATE PLATFORM.

                    El mero acceso y/o utilización del Portal, de todos o parte de sus contenidos y/o servicios 
                    significa la plena aceptación de las presentes Condiciones Generales, a las cuales los Usuarios
                    (en adelante, los “Usuarios”) declara haber tenido acceso y haber podido descargarlas del 
                    Sitio Web.
                </p>
            </div>
            <div class="center_terms">
                <h2> Requisitos </h2>
                <p> El sitio web pone los servicios de Urbanitae a disposición de los Usuarios que cumplan con los requisitos legales que señalamos a continuación:
                    Requisitos para el inversor:<br>
                    - Que sea mayor de edad (+18 años). <br>
                    - Que se cumplan con los requisitos de capacidad civil ordinaria. <br>
                    - Que no esté incapacitado judicialmente. <br>
                </p>
            </div>
            <div class="center_terms">
                <h2> Donaciones </h2>
                <p> El Usuario deberá respetar en todo momento los términos y condiciones 
                    establecidos en las presentes Condiciones Generales de uso del Portal. 
                    De forma expresa el Usuario manifiesta que utilizará el Portal de forma
                    diligente y asumiendo cualquier responsabilidad que pudiera derivarse 
                    del incumplimiento de las normas.

                    Así mismo, el Usuario no podrá utilizar el Portal para transmitir, almacenar, 
                    divulgar promover o distribuir datos o contenidos que sean portadores de virus o 
                    cualquier otro código informático, archivos o programas diseñados para interrumpir, 
                    destruir o perjudicar el funcionamiento de cualquier programa o equipo informático 
                    o de telecomunicaciones.
                </p>
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
<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile page</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    </head>
    <body>
    <?php include 'navbar.php' ?>
        <div class="profile_container">
            <div class="profile_header">
                <div class="profile_img">
                    <img src="./resources/images/user.png" alt="person photo" width="200">
                </div>
                <div class="profile_nav_info">
                    <h3> Área Privada </h3>
                </div>
            </div>

            <div class="main_bd">
                <div class="left_side">
                    <div class="profile_side">
                       <h3> Javier Ramos</h3> 
                        <p> Comunidad de Madrid, España</p>
                        <p>
                            <img src="../html/resources/images/phone.png" alt="telefono" width="20">
                            <span class="mobile_message">+637591862</span>
                        </p>
                        <p>
                            <img src="../html/resources/images/bell.png" alt="campana" width="20">
                            <span class="alert_message">5</span>
                        </p> 
                        <p>
                            <img src="../html/resources/images/correo.png" alt="correo" width="20">
                            <span class="mobile_message">No tienes correos nuevos</span>
                        </p> 
                        <div class="profile_btn">
                                <button class="chat_btn">
                                    <img src="../html/resources/images/chat.png" alt="chat" width="15">
                                    <span class="chat_message">Chat</span>
                                </button>
                        </div>
                    </div>
                </div>
                <div class="right_side">
                    <div class="profile_nav">
                        <ul>
                           <li onclick="tabs(0)" class="user_post_active"> Sobre mí </li>
                           <li onclick="tabs(1)" class="user_review"> Mis donaciones </li> 
                           <li onclick="tabs(2)" class="user_setting"> Settings </li> 
                        </ul>
                    </div>
                    <div class="profile_body">
                        <div class="profile_tab">
                            <h3> @JaviRamos77</h3>
                            <p> Soy Javier Ramos y tengo 22 años. Me encanta viajar y conocer nuevas culturas, pero mi pasión verdadera es la fotografía y querría dedicarme a ello en el futuro.</p>
                            <p> Siempre he sentido la necesidad de contribuir y he encontrado en Sanitae la mejor forma de hacerlo. Con muy poco se que ayudo mucho y el poder elegir a que hospital se envia mi donación es plus para escoger esta web de crowfundig. Soy del barrio de Tetuán y poder ayudar al hospital La Paz (el más importante de mi barrio) me llena de orgullo propio.</p>
                        </div>
                        <div class="profile_tab">
                            <h3> Últimas donaciones</h3>
                            <p> Aquí se indican las últimas donaciones de @JaviRamos77 con todos los datos completos como el método de transferencia o la propia contribución realizada al hospital correspondiente.  </p>  
                        </div>
                        <div class="profile_tab">
                           <h3> Ajustes de la cuenta...</h3> 
                           <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae vel sed laudantium ipsa tenetur voluptates incidunt. Qui mollitia omnis sunt sit iure, neque doloremque eum in corporis deserunt facere necessitatibus?</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="push"> </div>
        </div>
        <?php include 'footer.html' ?>
        <script type="text/javascript">
            $('.profile_nav ul li').click(function(){
            $(this).addClass("active").siblings().removeClass('active');
            })

            const tabBtn = document.querySelectorAll('.profile_nav ul li');

            const tab = document.querySelectorAll('.profile_tab');

            function tabs(panelIndex) {
                tab.forEach(function(node) {
                    node.style.display = 'none';
                });
                tab[panelIndex].style.display = 'block';
            }
            tabs(0);

            const toggleBtn = document.querySelector('.toggle_button');

            const navbar_links = document.querySelector('.navbar_links');

            toggleBtn.addEventListener('click', function() {
                navbar_links.classList.toggle('active');
            });
        </script>
    </body>
</html>
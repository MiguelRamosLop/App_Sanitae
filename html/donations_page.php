<?php
	session_start();

    if(isset($_SESSION['username'])){}
    else{header("Location: " . "login_page.php");}
    if(array_key_exists('donar',$_POST)){
        header("Location: " . "donations_page.php");
    }
?>
<?php
    include('conexion_bbdd.php');
    
?>
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
        <?php include 'navbar.php' ?>
        <div class="donation_container">
            <h1> Mascarillas y lámparas quirúrgicas </h1>   
            <div class="cajas">
                <div class="caja_texto">
                    <h2> Descripción de la campaña </h2>
                        <img class="producto_v2" src="../html/resources/images/mascarillas_en_hospitales.jpeg"  alt="aparato de anestesiología">
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
                                <li class="a a1"><a href="#"><img src="resources/images/Hospital_12_oct.jpg" alt="logo hospital 12 de octubre madrid" width="200px"></a></li>
                                <li class="a a2"><a href="#"><img src="resources/images/Hospital_La_Paz.JPG" alt="logo hospital la paz madrid" width="200px"></a></li>
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
                    <p> 
                        <strong> Dinero recaudado: </strong>
                        <?php
                            $query = "SELECT dinero FROM campanas where id = 2";
                            $result = mysqli_query($connection, $query);
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        echo $row["dinero"];
                                    }
                                }
                        ?>
                        €
                    </p>
                    <p> 
                        <strong> Objetivo a recaudar: </strong>
                        <?php
                            $query = "SELECT objetivo FROM campanas where id = 2";
                            $result = mysqli_query($connection, $query);
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        echo $row["objetivo"];
                                    }
                                }
                        ?>
                        €
                    </p>
                    <p> 
                        <strong> Progreso de la recaudacion: </strong>
                        <?php
                            $query = "SELECT dinero,objetivo FROM campanas where id = 2";
                            $result = mysqli_query($connection, $query);
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                        $dinero = $row["dinero"];
                                        $objetivo = $row["objetivo"];
                                    }
                                }
                                $division = ($dinero/$objetivo)*100;
                                if($division>100){
                                    $division = 100;
                                }
                                echo $division;
                                //echo $dinero;
                                //echo $objetivo;
                        ?>
                        %
                    </p> 
                    <div class="radio_button_signup">
                        <p> <strong> Escoge el hospital a donar: </strong>  </p>
                        <label class="rbtn">  Hospital Universitario de La Paz 
                            <input type="radio" checked="checked" name="radio">
                            <span class="checkmark"></span>
                        </label>
                        <label class="rbtn"> Hospital Universitario 12 de octubre 
                            <input type="radio" name="radio">
                            <span class="checkmark"></span>
                        </label>
                    </div>  
                    <p> <strong> Introduzca sus datos:  </strong></p>
                    <form method="post" id="datos_donacion">
                        <div class="metodos_pago">
                            <div class="text_field"> 
                                <input type="text" name="numero" placeholder="Numero de tarjeta" style="width : 20vw; heigth : 1px">
                            </div> 
                            
                            <div class="text_field"> 
                                <input type="text" name="cvv" placeholder="Numero CVV" style="width : 20vw; heigth : 1px">
                            </div> 
                            
                            <div class="text_field"> 
                                <input type="text" name="mes" placeholder="Mes de caducidad" style="width : 20vw; heigth : 1px">
                            </div> 
                            
                            <div class="text_field"> 
                                <input type="text" name="dia" placeholder="Dia de caducidad" style="width : 20vw; heigth : 1px">
                            </div> 
                            
                            <div class="text_field"> 
                                <input type="text" name="nombre" placeholder="Nombre en la tarjeta" style="width : 20vw; heigth : 1px">
                            </div> 
                            
                            <div class="text_field"> 
                                <input type="text" name="cifra" id="cifra" placeholder="Cantidad a donar" style="width : 20vw; heigth : 1px" value="<?= isset($_POST['cifra']) ? htmlspecialchars($_POST['cifra']) : '' ?>" onclick="document.getElementById('cifra').value = '';"/>
                            </div> 
                        </div> 
                        <div class="button_container">
                            <button type="submit" name="donar" id="donar" class="default_btn"> Donar  &#8594; </button>
                        </div>
                    </form>
                        
                    <?php
                    function ingresardinero($connection){
                        $query = "SELECT dinero FROM campanas where id = 2";
                        $result = mysqli_query($connection, $query);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    $dinero = $row["dinero"];
                                }
                            }

                        $cifra = $_POST["cifra"];
                        $suma = $cifra + $dinero;
                        
                        $query2 = "UPDATE campanas set dinero = '$suma' where id = 2";
                        $result2 = mysqli_query($connection, $query2);

                        if ($result2 && mysqli_affected_rows($connection) == 1) {
                            echo "Success!";
                        } else {
                            die("Database query failed. " . mysqli_error($connection));
                        }
                        
                    }
                    if(array_key_exists('donar',$_POST)){
                    ingresardinero($connection);
                    nepe();
                    }
                    ?>
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
                $("#datos_donacion").validate({
                    rules: {
                        numero : {
                            required: true,
                            minlength: 16,
                            maxlength: 16
                        },
                        cvv : {
                            required: true,
                            minlength: 3,
                            maxlength: 3
                        },
                        mes : {
                            required: true,
                            minlength: 1,
                            maxlength: 2
                        },
                        dia : {
                            required: true,
                            minlength: 1,
                            maxlength: 2
                        },
                        nombre : {
                            required: true,
                            minlength: 3,
                            maxlength: 30
                        },
                        cifra : {
                            required: true,
                            minlength: 1,
                            maxlength: 4,
                            number: true,
                            max: 1000
                        }
                    },
                    messages: {
                        numero : {
                            required: "Introduzca su numero de tarjeta",
                            minlength: "El numero de tarjeta debe tener 16 digitos",
                            maxlength: "El numero de tarjeta debe tener 16 digitos"
                        },
                        cvv : {
                            required: "Introduzca su numero CVV",
                            minlength: "El numero CVV debe tener 3 digitos",
                            maxlength: "El numero CVV debe tener 3 digitos"
                        },
                        mes : {
                            required: "Introduzca su mes de caducidad",
                            minlength: "Proporcione un mes de caducidad valido",
                            maxlength: "Proporcione un mes de caducidad valido"
                        },
                        dia : {
                            required: "Introduzca su dia de caducidad",
                            minlength: "Proporcione un dia de caducidad valido",
                            maxlength: "Proporcione un dia de caducidad valido"
                        },
                        nombre : {
                            required: "Introduzca su nombre en la tarjeta",
                            minlength: "El nombre en la tarjeta debe tener 3 digitos",
                            maxlength: "El nombre en la tarjeta debe tener 30 digitos"
                        },
                        cifra : {
                            required: "Introduzca la cantidad a donar",
                            minlength: "La cantidad a donar debe tener 1 digitos",
                            maxlength: "La cantidad a donar debe tener 4 digitos",
                            number: "La cantidad a donar debe ser un numero",
                            max: "La cantidad a donar no puede ser mayor a 1000"
                        }
                    }
                });
            });
        </script>
    </body>
</html>
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
                    <p> 
                        Dinero recaudado:
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
                        Objetivo a recaudar:
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
                        Progreso de la recaudacion:
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
                    <p> Introduzca sus datos: </p>
                    <form method="post">
                        <div class="metodos_pago">
                            <input type="text" name="numero" placeholder="Numero de tarjeta">
                            <input type="text" name="cvv" placeholder="Numero CVV">
                            <input type="text" name="mes" placeholder="Mes de caducidad">
                            <input type="text" name="dia" placeholder="Dia de caducidad">
                            <input type="text" name="nombre" placeholder="Nombre en la tarjeta">
                            <input type="text" name="cifra" id="cifra" placeholder="Cantidad a donar" value="<?= isset($_POST['cifra']) ? htmlspecialchars($_POST['cifra']) : '' ?>" onclick="document.getElementById('cifra').value = '';"/>
                        </div> 
                        <div class="button_container">
                            <button type="submit" name="donar" id="donar" class="default_btn"> Donar </button>
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
        <script type="text/javascript">
            const toggleBtn = document.querySelector('.toggle_button');

            const navbar_links = document.querySelector('.navbar_links');

            toggleBtn.addEventListener('click', function() {
                navbar_links.classList.toggle('active');
            });
        </script>
    </body>
</html>
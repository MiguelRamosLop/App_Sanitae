<?php
	session_start();
    include('conexion_bbdd.php');

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
    
        <h2> Todas las donaciones </h2>
                            <p> 
                                <?php
                                    $username = $_SESSION["username"];
                                    $query = "SELECT cantidad,objeto,usuario FROM donaciones";
                                    $result = mysqli_query($connection, $query);

                                    if($result->num_rows>0){
                                            $count = '1';
                                        ?>
                                        <table class="table">
                                            <tr>
                                                <th> <strong> Donacion    </strong></th>
                                                <th> <strong> Usuario     </strong></th>
                                                <th> <strong> Cantidad    </strong></th>
                                                <th> <strong> Campaña     </strong></th>
                                            </tr>
                                        <?php
                                        while($row = $result->fetch_assoc()){
                                        ?>
                                            <tr>
                                                <td>#<?php echo $count; ?></td>
                                                <td><?php echo $row["usuario"]; ?></td>
                                                <td><?php echo $row["cantidad"]; ?></td>
                                                <td><?php echo $row["objeto"]; ?></td>
                                            </tr>

                                            <?php
                                            //echo "Donacion: #".$count."              Usuario: ".$username."<br>";
                                            $count++;
                                        }
                                        ?>
                                        </table> 
                                        <?php
                            //$row["ID"]
                                    }
                                    else{
                                        echo "Nadie ha donado nada";
                                    }
                                ?>
                            </p>

                            <h2> Todos los usuarios </h2>

                            <p> 
                                <?php
                                    $username = $_SESSION["username"];
                                    $query = "SELECT * FROM datos";
                                    $result = mysqli_query($connection, $query);

                                    if($result->num_rows>0){
                                            $count = '1';
                                        ?>
                                        <table class="table">
                                            <tr>
                                                <th> <strong> Nombre    </strong></th>
                                                <th> <strong> Apellido     </strong></th>
                                                <th> <strong> Usuario    </strong></th>
                                                <th> <strong> Telefono     </strong></th>
                                                <th> <strong> DNI     </strong></th>
                                            </tr>
                                        <?php
                                        while($row = $result->fetch_assoc()){
                                        ?>
                                            <tr>
                                                <td><?php echo $row["nombre"]; ?></td>
                                                <td><?php echo $row["apellido"]; ?></td>
                                                <td><?php echo $row["username"]; ?></td>
                                                <td><?php echo $row["telefono"]; ?></td>
                                                <td><?php echo $row["nif"]; ?></td>
                                            </tr>

                                            <?php
                                            //echo "Donacion: #".$count."              Usuario: ".$username."<br>";
                                            $count++;
                                        }
                                        ?>
                                        </table> 
                                        <?php
                            //$row["ID"]
                                    }
                                    else{
                                        echo "Nadie ha donado nada";
                                    }
                                ?>
                            </p>

                            <h2> Todas las campañas </h2>

                            <p> 
                                <?php
                                    $username = $_SESSION["username"];
                                    $query = "SELECT * FROM campanas";
                                    $result = mysqli_query($connection, $query);

                                    if($result->num_rows>0){
                                            $count = '1';
                                        ?>
                                        <table class="table">
                                            <tr>
                                                <th> <strong> Nombre    </strong></th>
                                                <th> <strong> Dinero     </strong></th>
                                                <th> <strong> Objetivo    </strong></th>
                                            </tr>
                                        <?php
                                        while($row = $result->fetch_assoc()){
                                        ?>
                                            <tr>
                                                <td><?php echo $row["nombre"]; ?></td>
                                                <td><?php echo $row["dinero"]; ?></td>
                                                <td><?php echo $row["objetivo"]; ?></td>
                                            </tr>

                                            <?php
                                            //echo "Donacion: #".$count."              Usuario: ".$username."<br>";
                                            $count++;
                                        }
                                        ?>
                                        </table> 
                                        <?php
                            //$row["ID"]
                                    }
                                    else{
                                        echo "Nadie ha donado nada";
                                    }
                                ?>
                            </p>
        
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
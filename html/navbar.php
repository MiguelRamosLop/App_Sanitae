<html>
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
                        $_SESSION['username'] = $_POST['username']; ?>
                    <a href="user_page.php"><img src="resources/images/user.png" alt="user" width="25" height="25"></a></li>
                <li>
                <a href="logout_page.php"><img src="resources/images/log-out.png" alt="user" width="25" height="25"></a>
                    <?php
                    } else {
                        if(isset($_SESSION['username'])){ ?>
                            <a href="user_page.php"><img src="resources/images/user.png" alt="user" width="25" height="25"></a></li>
                <li>
                <a href="logout_page.php"><img src="resources/images/log-out.png" alt="user" width="25" height="25"></a>
                        <?php
                        } else { ?>
                        <a href="../html/login_page.php"> Iniciar Sesión </a>
                <?php     }
                    } ?>
                    
                
                </li>
            </ul>
    </div>
</nav>
</html>
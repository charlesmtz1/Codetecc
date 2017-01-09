<?php
    $lang = $_GET['lang'];

    if (isset($_POST['english'])) {
        $lang = "en";
    }

    if (isset($_POST['spanish'])) {
        $lang = "es";
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CODETECC | Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <link href="assets/css/font-awesome.css" rel="stylesheet" /> 
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
        <link rel="icon" type="image/png" href="assets/img/logo-icon.png">
    </head>
    <body id="top">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> 
                    </button>
                    <?php
                        if ($lang == "es")
                            echo "<a class='navbar-brand' href='index.php?lang=es'><img src='assets/img/logo.png' alt='Codetecc Logo' height='60px'></a>";
                        else
                            echo "<a class='navbar-brand' href='index.php?lang=en'><img src='assets/img/logo.png' alt='Codetecc Logo' height='60px'></a>";
                    ?>
                </div>
                <div class="navbar-right">
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" name="languaje">
                        <?php
                            if ($lang == "es") {
                                echo "<p style='display:inline; margin-right:20px'>Idioma</p>";
                                echo "Sirve!";
                            } else {
                                echo "<p style='display:inline; margin-right:20px'>Languaje</p>";
                            }  
                        ?>
                        <button type="submit" name="english"><img src="assets/img/en.png" alt="Us Flag" height="24px" style="margin:-8px"></button>
                        &nbsp
                        <button type="submit" name="spanish"><img src="assets/img/es.png" alt="Mex Flag" height="24px" style="margin:-8px"></button>
                    </form>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <br>
                    <br>
                    <?php
                        if (isset($_POST['spanish'])) {
                            echo "<ul class='nav navbar-nav navbar-right'>";
                            echo "      <li><a href='index.php'>Inicio</a></li>";
                            echo "      <li><a href='services.php?lang=es'>Servicios</a></li>";
                            echo "      <li><a href='prices.php'>Precios</a></li>";
                            echo "      <li><a href='contact.php'>Contacto</a></li>";
                            echo "</ul>";
                        } else {
                            echo "<ul class='nav navbar-nav navbar-right'>";
                            echo "      <li><a href='index.php'>Home</a></li>";
                            echo "      <li><a href='services.php'>Services</a></li>";
                            echo "      <li><a href='prices.php'>Prices</a></li>";
                            echo "      <li><a href='contact.php'>Contact</a></li>";
                            echo "</ul>";
                        }
                ?>  
                </div>
            </div>
        </nav>

        <div class="jumbotron">
            <h1>CODETECC<sup><small>&copy</small></sup></h1>
            <?php
                if (isset($_POST['spanish'])) {
                    echo "<p>Consultores en Desarrollos Tecnologicos de Computacion</p>";
                } else {
                    echo "<p>IT technologies for your business.</p>";
                }
            ?>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8">
                    <?php
                        if (isset($_POST['spanish'])) {
                            echo "<h2>Quienes somos?</h2>";
                            echo "<br>";
                            echo "<h4 class='justify'>Somos una empresa con el objetico de proveer servicios de telecomunicaciones y seguridad para su negocio, 
                            utilizando las mejores tecnologias y otorgandole a nuestros clientes un servicio de la mas alta calidad para su total satisfaccion.</h4>";
                        }else{
                            echo "<h2>About Us</h2>";
                            echo "<br>";
                            echo "<h4 class='justify'>We are a company with the objective of providing you telecommunications and security solutions 
                            for your business, using the best technologies and giving our customers a service of the highest quality for your total satisfaction.</h4>";
                        }
                    ?>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-2">
                    <span class="glyphicon glyphicon-question-sign logo"></span>
                </div>
                <div class="col-sm-1"></div>
            </div>      
        </div>

        <div class="container-fluid" style="background-image: url('assets/img/security.jpg'); background-size: cover;">
            <div class="row">
                <div class="col-sm-12">
                    <br><br><br><br><br><br><br><br><br><br>
                </div>
            </div>      
        </div>

        <div class="container-fluid gray">
            <div class="row">
                <div class="col-sm-4">
                    <img src="assets/img/security.png" alt="Security Eye" height="250px">
                </div>
                <div class="col-sm-8">
                    <h2>Your security is our priority</h2>
                    <br>
                    <h4 class="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                    ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
                    mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
                    commodo consequat.</h4>
                </div>
            </div>      
        </div>

        <div class="container-fluid" style="background-image: url('assets/img/switch.jpg'); background-size: cover;">
            <div class="row">
                <div class="col-sm-12">
                    <br><br><br><br><br><br><br><br><br><br>
                </div>
            </div>      
        </div>

        <div class="container-fluid black">
            <div class="row">
                <div class="col-sm-8">
                    <h2 class="white">You never run out of communication.</h2>
                    <br>
                    <h4 class="white justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                    ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
                    mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
                    commodo consequat.</h4>
                </div>
                <div class="col-sm-4">
                    <img src="assets/img/off.jpg" alt="Power Off" height="250px">
                </div>
            </div>      
        </div>
        
        <footer class="container-fluid text-center">
            <a href="#top" title="To Top">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a>
            <p>Information of the webmaster</p> 
        </footer>

        <script src="assets/js/jquery-1.10.2.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.metisMenu.js"></script>
    </body>
</html>
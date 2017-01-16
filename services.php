<?php
    
    $lang = null;

    if (isset($_GET['lang'])) {
        if ($_GET['lang'] == "en") {
            $lang = "en";
        }else {
            $lang = "es";
        }   
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CODETECC | Services</title>
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
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="GET" name="languaje">
                        <?php
                            if ($lang == "es") {
                                echo "<p style='display:inline; margin-right:20px'>Idioma</p>";
                            } else {
                                echo "<p style='display:inline; margin-right:20px'>Languaje</p>";
                            }  
                        ?>
                        <button type="submit" name="lang" value="en"><img src="assets/img/en.png" alt="Us Flag" height="24px" style="margin:-8px"></button>
                        &nbsp
                        <button type="submit" name="lang" value="es"><img src="assets/img/es.png" alt="Mex Flag" height="24px" style="margin:-8px"></button>
                    </form>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <br>
                    <br>
                    <?php
                        if ($lang == "es") {
                            echo "<ul class='nav navbar-nav navbar-right'>";
                            echo "      <li><a href='index.php?lang=es'>Inicio</a></li>";
                            echo "      <li><a href='services.php?lang=es'>Servicios</a></li>";
                            echo "      <li><a href='prices.php?lang=es'>Precios</a></li>";
                            echo "      <li><a href='contact.php?lang=es'>Contacto</a></li>";
                            echo "</ul>";
                        } else {
                            echo "<ul class='nav navbar-nav navbar-right'>";
                            echo "      <li><a href='index.php?lang=en'>Home</a></li>";
                            echo "      <li><a href='services.php?lang=en'>Services</a></li>";
                            echo "      <li><a href='prices.php?lang=en'>Prices</a></li>";
                            echo "      <li><a href='contact.php?lang=en'>Contact</a></li>";
                            echo "</ul>";
                        }
                    ?>
                </div>
            </div>
        </nav>

        <div class="jumbotron">
            <h1>CODETECC<sup><small style="color: white">&copy</small></sup></h1>
            <?php
                if ($lang == "es") {
                    echo "<p>Consultores en Desarrollos Tecnológicos de Computación</p>";
                }else {
                    echo "<p>IT technologies for your business.</p>";
                }
            ?>
        </div>

        <div class="container-fluid text-center">
            <?php
                if ($lang == "es") {
                    echo "<h2>Nuestros servicios</h2>";
                }else {
                    echo "<h2>Our services</h2>";
                }
            ?>
            <br>
            <div class="row">
                <div class="col-sm-3">
                    <span class="glyphicon glyphicon-facetime-video logo-small"></span>
                    <?php
                        if ($lang == "es") {
                            echo "<h4>Camaras de Seguridad</h4>";
                            echo "<p>Proteja sus bienes y a sus seres queridos.</p>";
                        }else {
                            echo "<h4>CCTV Security</h4>";
                            echo "<p>Protect your assets and your loveds ones.</p>";
                        }
                    ?>
                </div>
                <div class="col-sm-3">
                    <span class="glyphicon glyphicon-bell logo-small"></span>
                    <?php
                        if ($lang == "es") {
                            echo "<h4>Alarma de Seguridad</h4>";
                            echo "<p>Seguridad para su hogar o negocio incluso si se encuentra fuera.</p>";
                        }else {
                            echo "<h4>Alarm Security</h4>";
                            echo "<p>Security for your home and business also when you go out.</p>";
                        }
                    ?>
                </div>
                <div class="col-sm-3">
                    <span class="glyphicon glyphicon-phone-alt logo-small"></span>
                    <?php
                        if ($lang == "es") {
                            echo "<h4>Red de Voz y Datos</h4>";
                            echo "<p>Nunca se quede incomunicado.</p>";
                        }else {
                            echo "<h4>Voice and Data Network</h4>";
                            echo "<p>You never run out of communication.</p>";
                        }
                    ?>
                </div>
                <div class="col-sm-3">
                    <span class="glyphicon glyphicon-music logo-small"></span>
                    <?php
                        if ($lang == "es") {
                            echo "<h4>Instalacion de Audio</h4>";
                            echo "<p>Que el entretenimiento nunca falte en casa.</p>";
                        }else {
                            echo "<h4>Audio Installation</h4>";
                            echo "<p>Entertainment will never be lacking at home.</p>";
                        }
                    ?>
                </div>
            </div> 
        </div>

        <div class="container-fluid gray">
            <div class="row">
                <div class="col-sm-8">
                    <h2>CCTV Security</h2>
                    <br>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                    ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
                    mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
                    commodo consequat.</h4>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-2">
                    <span class="glyphicon glyphicon-question-sign logo"></span>
                </div>
                <div class="col-sm-1"></div>
            </div>      
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <img src="assets/img/pic2.jpg" alt="Security shield" height="250px">
                </div>
                <div class="col-sm-8">
                    <h2>Data Network installation</h2>
                    <br>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                    ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
                    mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
                    commodo consequat.</h4>
                </div>
            </div>      
        </div>

        <div class="container-fluid bblue">
            <div class="row">
                <div class="col-sm-8">
                    <h2>Voice Network installation</h2>
                    <br>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                    ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
                    mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
                    commodo consequat.</h4>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-2">
                    <span class="glyphicon glyphicon-question-sign logo"></span>
                </div>
                <div class="col-sm-1"></div>
            </div>      
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <img src="assets/img/pic2.jpg" alt="Security shield" height="250px">
                </div>
                <div class="col-sm-8">
                    <h2>Data Network installation</h2>
                    <br>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                    ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
                    mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
                    commodo consequat.</h4>
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
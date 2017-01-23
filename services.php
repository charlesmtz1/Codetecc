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
                    <?php
                        if ($lang == "es") {
                            echo "<h2>Camaras de seguridad</h2>";
                            echo "<br>";
                            echo "<h4 class='justify'>Tenemos a su disposicion nuestro servicio de instalacion de camaras de seguridad. Siempre este al tanto de todos los 
                                eventos que ocurran dentro y fuera de su hogar o negocio y mantenga a sus seres queridos y pertenencias seguros.</h4>";
                            echo "<br>";
                            echo "<a href='prices.php?lang=es'><button type='button' class='btn btn-lg'>Arma tu paquete!</button></a>";
                        }else {
                            echo "<h2>CCTV Security</h2>";
                            echo "<br>";
                            echo "<h4 class='justify'>We have at your disposal our CCTV installation service. Always be aware of all events that occur inside and outside 
                                of your home or business and keep your loved ones and belongings safe.</h4>";
                            echo "<br>";
                            echo "<a href='prices.php?lang=en'><button type='button' class='btn btn-lg'>Make your pack!</button></a>";
                        }
                    ?>
                </div>
                <div class="col-sm-4">
                    <center>
                        <img src="assets/img/camera.jpg" alt="CCTV Camera" height="250px">
                    </center>
                </div>
            </div>      
        </div>
        
        <div class="container-fluid igray">
            <div class="row">
                <div class="col-sm-4">
                    <center>
                        <img src="assets/img/alarm.jpg" alt="Blue Alarm" height="300px">
                    </center>
                </div>
                <div class="col-sm-8">
                    <?php
                        if ($lang == "es") {
                            echo "<h2>Alarma de seguridad</h2>";
                            echo "<br>";
                            echo "<h4 class='justify'>Quiere contar con su hogar o negocio seguro incluso si se encuentra fuera de el? Ofrecemos nuestro servicio de instalacion
                                de alarma de seguridad, el cual mantiene seguro su patrimonio y le brinda tranquilidad a usted cada vez que requiera salir.</h4>";
                            echo "<br>";
                            echo "<a href='prices.php?lang=es' style='float: right'><button type='button' class='btn btn-lg'>Arma tu paquete!</button></a>";
                        }else {
                            echo "<h2>Alarm Security</h2>";
                            echo "<br>";
                            echo "<h4 class='justify'>Do you want to count on your home or business insurance even if you are out of it? We offer our security alarm installation 
                                service, which keeps your assets safe and gives you peace of mind whenever you need to leave your home or business.</h4>";
                            echo "<br>";
                            echo "<a href='prices.php?lang=en' style='float: right'><button type='button' class='btn btn-lg'>Make your pack!</button></a>";
                        }
                    ?>
                </div>
            </div>      
        </div>
        
        <div class="container-fluid gray">
            <div class="row">
                <div class="col-sm-8">
                    <?php
                        if ($lang == "es") {
                            echo "<h2>Red de Voz y Datos</h2>";
                            echo "<br>";
                            echo "<h4 class='justify'>Disfrute de sus servicios de telefonia e internet y siempre mantengase comunicado con nuestro servicio de instalacion de 
                                voz y datos. Adecuamos su instalacion para que cuente con telefono o internet en los sitios de su hogar donde los necesite.</h4>";
                            echo "<br>";
                            echo "<a href='prices.php?lang=es'><button type='button' class='btn btn-lg'>Arma tu paquete!</button></a>";
                        }else {
                            echo "<h2>Voice and Data Network</h2>";
                            echo "<br>";
                            echo "<h4 class='justify'>Enjoy your telephone and internet services and always keep in touch with our voice and data installation service. We 
                                adapt your installation so that you have telephone or internet in the places of your home where you need them.</h4>";
                            echo "<br>";
                            echo "<a href='prices.php?lang=en'><button type='button' class='btn btn-lg'>Make your pack!</button></a>";
                        }
                    ?>
                </div>
                <div class="col-sm-4">
                    <center>
                        <img src="assets/img/network.jpg" alt="Network Cable" height="300px">
                    </center>
                </div>
            </div>      
        </div>
        
        <div class="container-fluid igray">
            <div class="row">
                <div class="col-sm-4">
                    <center>
                        <img src="assets/img/home.jpg" alt="Home Theater" height="300px">
                    </center>    
                </div>
                <div class="col-sm-8">
                    <?php
                        if ($lang == "es") {
                            echo "<h2>Instalacion de Audio</h2>";
                            echo "<br>";
                            echo "<h4 class='justify'>Tiene una sala de entretenimiento y quiere equiparla con el mejor sistema de sonido y que a su vez el sonido sea uniforme 
                                en toda la habitacion? Nuestro servicio de instalacion audio permite disfrutar al maximo de su sistema para esos momentos especiales con sus 
                                familiares y amigos.</h4>";
                            echo "<br>";
                            echo "<a href='prices.php?lang=es' style='float: right'><button type='button' class='btn btn-lg'>Arma tu paquete!</button></a>";
                        }else {
                            echo "<h2>Audio Installation</h2>";
                            echo "<br>";
                            echo "<h4 class='justify'>It has an entertainment room and wants to equip it with the best sound system and that in turn the sound is uniform 
                                throughout the room? Our audio installation service allows you to enjoy the maximum of your sound system for those special moments with your family 
                                and friends.</h4>";
                            echo "<br>";
                            echo "<a href='prices.php?lang=en' style='float: right'><button type='button' class='btn btn-lg'>Make your pack!</button></a>";
                        }
                    ?>
                </div>
            </div>      
        </div>
        <hr>        
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
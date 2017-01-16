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

        <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <div class="carousel-inner" role="listbox">
                <div class="item active" style="background-image:url('assets/img/Pic1.jpg'); background-size:cover; height:450px;">
                    <div class="carousel-caption">
                        <!--<h1>CODETECC<sup><small>&copy</small></sup></h1>-->
                        <?php
                            if ($lang == "es") {
                              //  echo "<p>Consultores en Desarrollos Tecnologicos de Computacion</p>";
                            } else {
                              //  echo "<p>IT technologies for your home and business.</p>";
                            }
                        ?>
                        <?php
                            if ($lang == "es") {
                                echo "<h2 class='white'>Quienes somos?</h2>";
                                echo "<h4 class='white justify'>Somos una empresa con el objetivo de proveer servicios de telecomunicaciones y seguridad para su hogar o 
                                negocio, utilizando las mejores tecnologias y otorgandole a nuestros clientes un servicio de la mas alta calidad para su total satisfaccion.
                                </h4>";
                            }else{
                                echo "<h2 class='white'>About Us</h2>";
                                echo "<h4 class='white justify'>We are a company with the objective of providing you telecommunications and security solutions 
                                for your business, using the best technologies and giving our customers a service of the highest quality for your total satisfaction.</h4>";
                            }
                        ?>
                    </div>
                </div>

                <div class="item" style="background-image:url('assets/img/Security.jpg'); background-size:cover; height:450px;">
                    <div class="carousel-caption">
                        <?php
                            if ($lang == "es") {
                                echo "<h2 class='white'>Su seguridad es nuestra prioridad</h2>";
                                echo "<h4 class='white justify'>En la actualidad, el tema de la seguridad es muy importante para la tranquilidad de las personas. El sentirse 
                                        inseguro puede generarle estrés y preocupación constante que puede provocar que no quiera salir de su hogar o negocio.</h4>";
                                echo "<h4 class='white justify'>Nosotros entendemos la preocupación que genera el no contar con ella o que su patrimonio y sus seres queridos 
                                no estén protegidos, por lo cual le ofrecemos soluciones de protección para su bienestar y para que viva con tranquilidad.</h4>";
                            }else{
                                echo "<h2 class='white'>Your security is our priority</h2>";
                                echo "<h4 class='white justify'>Today, the security is very important for people's tranquillity. Feel insecure could generate stress and worries 
                                    that could be that you don't want to exit from your home or business.</h4>";
                                echo "<h4 class='white justify'>We undertand the worry that this generate when you don't feel secure, including your assets and loveds ones. We 
                                    offer to you security solutions for your wellness and we can give you back your tranquillity.</h4>";
                            }
                        ?>
                    </div>
                </div>

                <div class="item" style="background-image:url('assets/img/switch.jpg'); background-size:cover; height:450px;">
                    <div class="carousel-caption">
                        <?php
                            if ($lang == "es") {
                                echo "<h2 class='white'>Nunca se quede incomunicado</h2>";
                                echo "<h4 class='white justify'>El teléfono es una herramienta necesaria para la comunicación, ya sea para una llamada de emergencia, llamar a 
                                    un cliente, saludar a un amigo o incluso ordenar una pizza. A su vez, el internet es una herramienta que es utilizada para casi todas nuestras 
                                    actividades de nuestro día, y es muy difícil pensar un mundo sin el hoy en día.</h4>";
                                echo "<h4 class='white justify'>Nunca se quede incomunicado, con nuestro servicio de instalación de voz y datos siempre estará conectado.</h4>";
                            }else{
                                echo "<h2 class='white'>You never run out of communication</h2>";
                                echo "<h4 class='white justify'>The phone is a necessary tool for the communication, either for making a emergency call, call to a customer, 
                                    greet to a friend or also order a pizza. At the same time, the internet is a tool that is used for almost all our activities in the day, 
                                    and is hard to think a world without it.</h4>";
                                echo "<h4 class='white justify'>You never run out of communication, with our service of voice and data installation you always stays online.</h4>";
                            }
                        ?>
                    </div>
                </div>

                <div class="item" style="background-image:url('assets/img/audio.jpg'); background-size:cover; height:450px;">
                    <div class="carousel-caption">
                        <?php
                            if ($lang == "es") {
                                echo "<h2 class='white'>Entretenimiento para su hogar</h2>";
                                echo "<h4 class='white justify'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                                        ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
                                        mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
                                        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
                                        commodo consequat.</h4>";
                            }else{
                                echo "<h2 class='white'>Entertainment for your home</h2>";
                                echo "<h4 class='white justify'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                                        ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
                                        mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
                                        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
                                        commodo consequat.</h4>";
                            }
                        ?>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

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

        <div class="container-fluid text-center">
            <?php
                if ($lang == "es") {
                    echo "<a href='services.php?lang=es'><button type='button' class='btn btn-lg'>Click aqui para mas detalles</button></a>";
                }else {
                    echo "<a href='services.php?lang=en'><button type='button' class='btn btn-lg'>Click here for details</button></a>";
                }
            ?>
        </div>
        
        <footer class="container-fluid text-center">
            <a href="#top" title="To Top">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a>
            <p>Information of the webmaster</p> 
        </footer>

        <script src="assets/js/jquery-1.10.2.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/custom.js"></script>
    </body>
</html>
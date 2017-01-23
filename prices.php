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
        <title>CODETECC | Prices</title>
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

        <div class="container-fluid">
            <div class="row">
                <div class="text-center">
                    <?php
                        if ($lang == "es") {
                            echo "<h2>Arma tu paquete</h2>";
                            echo "<h4>Sigue los pasos para crear tu paquete y proporcionarte tu precio.</h4>";
                        } else {
                            echo "<h2>Make your pack</h2>";
                            echo "<h4>Follow the steps below to make your pack and give you the price for it.</h4>";
                        }
                    ?>
                </div>
                <br><br>
                <form>
                    <fieldset>
                        <?php
                            if ($lang == "es") {
                                echo "<legend>Paso uno: Selecciona tu paquete de instalacion.</legend>";
                                echo "<input type='radio' name='option' value='pack1'> CCTV <br>";
                                echo "<input type='radio' name='option' value='pack2'> CCTV + Instalacion de voz y datos <br>";
                                echo "<input type='radio' name='option' value='pack3'> CCTV + Alarma <br>";
                                echo "<input type='radio' name='option' value='pack4'> Instalacion de voz y datos + Instalacion de audio <br>";
                                echo "<input type='radio' name='option' value='pack5'> Instalacion de audio <br>";
                                echo "<input type='radio' name='option' value='pack6'> Instalacion de voz y datos <br>";
                                echo "<input type='radio' name='option' value='pack7'> Todo en Uno<br>";
                            } else {
                                echo "<legend>Step one: Choose your installation pack.</legend>";
                                echo "<input type='radio' name='option' value='pack1'> CCTV <br>";
                                echo "<input type='radio' name='option' value='pack2'> CCTV + Voice/Data installation <br>";
                                echo "<input type='radio' name='option' value='pack3'> CCTV + Alarm <br>";
                                echo "<input type='radio' name='option' value='pack4'> Voice/Data installation + Audio installation <br>";
                                echo "<input type='radio' name='option' value='pack5'> Audio installation <br>";
                                echo "<input type='radio' name='option' value='pack6'> Voice/Data installation <br>";
                                echo "<input type='radio' name='option' value='pack7'> All-in-One <br>";
                            }
                        ?>
                    </fieldset>
                </form>
            </div>
            <br><br>
            <div class="row">
                <form>
                    <fieldset>
                        <?php
                            if ($lang == "es") {
                                echo "<legend>Paso dos: Especifique las medidas de largo y ancho de su hogar.</legend>";
                            }else {
                                echo "<legend>Step two: Specify the lenght and wide of your house.</legend>";
                            }
                        ?>
                        <br><br>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-2">
                            <center>
                                <?php
                                    if ($lang == "es") {
                                        echo "<label for='length'>Largo:</label><br>";
                                    } else {
                                        echo "<label for='length'>Length:</label><br>";
                                    }
                                ?>
                                <input type="number" class="form-control" name="length" value="0" min="0" max="25">Mts
                                <br><br><br>
                                <?php
                                    if ($lang == "es") {
                                        echo "<label for='width'>Ancho:</label><br>";
                                    } else {
                                        echo "<label for='width'>Width:</label><br>";
                                    }
                                ?>
                                <input type="number" class="form-control" name="width" value="0" min="0" max="25">Mts
                                <br><br>
                                <?php
                                    if ($lang == "es") {
                                        echo "<input type='button' name='send' value='Envia tus datos' style='float:left' onclick='drawPlain(this.form)'>";
                                        echo "<input type='button' name='clear' value='Limpiar' style='float:right' onclick='limpiar()'>";
                                    } else {
                                        echo "<input type='button' name='send' value='Send your sizes' style='float:left' onclick='drawPlain(this.form)'>";
                                        echo "<input type='button' name='clear' value='Clear' style='float:right' onclick='limpiar()'>";
                                    }
                                    
                                ?>
                            </center>
                        </div>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-7">
                            <canvas id="house" height="300px" width="500px" style="border: 1px solid lightgray"></canvas>
                        </div>
                    </fieldset>
                </form>
            </div>

        </div>

        <div class="container-fluid">
            <div class="text-center">
                <h2>Our prices</h2>
                <h4>We offer the best prices for you:</h4>
            </div>
            <br><br>
            <div class="row">
                <div class="col-sm-4">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h1>CCTV</h1>
                        </div>
                        <div class="panel-body">
                            <h4>CCTV Pack includes:</h4>
                            <ul>
                                <li><strong>Service 1</strong></li>
                                <li><strong>Service 2</strong></li>
                                <li><strong>Service 3</strong></li>
                                <li><strong>Service 4</strong></li>
                                <li><strong>Service 5</strong></li>
                            </ul>
                        </div>
                        <div class="panel-footer">
                            <h4>Since</h4>
                            <h3>$9.99</h3>
                            <a href="contact.php"><button type="button" class="btn btn-lg">Contact Us</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h1>Data Network</h1>
                        </div>
                        <div class="panel-body">
                            <h4>Data Network Pack includes:</h4>
                            <ul>
                                <li><strong>Service 1</strong></li>
                                <li><strong>Service 2</strong></li>
                                <li><strong>Service 3</strong></li>
                                <li><strong>Service 4</strong></li>
                                <li><strong>Service 5</strong></li>
                            </ul>
                        </div>
                        <div class="panel-footer">
                            <h4>Since</h4>
                            <h3>$9.99</h3>
                            <a href="contact.php"><button type="button" class="btn btn-lg">Contact Us</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-default text-center">
                        <div class="panel-heading">
                            <h1>Voice Network</h1>
                        </div>
                        <div class="panel-body">
                            <h4>Voice Network Pack includes:</h4>
                            <ul>
                                <li><strong>Service 1</strong></li>
                                <li><strong>Service 2</strong></li>
                                <li><strong>Service 3</strong></li>
                                <li><strong>Service 4</strong></li>
                                <li><strong>Service 5</strong></li>
                            </ul>
                        </div>
                        <div class="panel-footer">
                            <h4>Since</h4>
                            <h3>$9.99</h3>
                            <a href="contact.php"><button type="button" class="btn btn-lg">Contact Us</button></a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
        <footer class="container-fluid text-center">
            <a href="#top" title="To Top">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a>
            <p>Information of the webmaster</p> 
        </footer>      

        <script src="assets/js/canvas.js"></script>
        <script src="assets/js/jquery-1.10.2.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.metisMenu.js"></script>
    </body>
</html>
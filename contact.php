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
        <title>CODETECC | Contact</title>
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
                    <a class="navbar-brand" href="index.php"><img src="assets/img/logo.png" alt="Codetecc Logo" height="60px"></a>
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

       <div class="container-fluid bg-grey">
           <h2 class="text-center">Contact Us</h2>
           <div class="row">
               <div class="col-sm-5 black-font">
                   <h4>Contact us to give you your price or to make a date.</h4>
                   <p><span class="glyphicon glyphicon-map-marker"></span> Address #123, Zip Code:00000, California, US</p>
                   <p><span class="glyphicon glyphicon-phone"></span> +00 3310331010</p>
                   <p><span class="glyphicon glyphicon-envelope"> information@codetecc.com</span></p>
               </div>
               <div class="col-sm-7 black-font">
                    <form action=" <?php $_SERVER["PHP_SELF"] ?>" name="contact" method="POST">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name">Your name:</label><br>
                                <input type="text" class="form-control" name="name" placeholder="Full Name" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="name">Your email:</label><br>
                                <input type="email" class="form-control" name="email" placeholder="example@mail.com" required>
                            </div>
                        </div>
                        <label for="request">Request:</label>
                        <textarea class="form-control" rows="5" name="request" placeholder="Make your request" required></textarea>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <button class="btn btn-default pull-right" type="submit">Send!</button>
                            </div>
                        </div> 
                    </form>
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
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
                    <a class="navbar-brand" href="index.php"><img src="assets/img/logo.png" alt="Codetecc Logo" height="60px"></a>
                </div>
                <div class="navbar-right">
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" name="languaje">
                        <?php
                            if ($lang == "es") {
                                echo "<p style='display:inline; margin-right:20px'>Idioma</p>";
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
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="prices.php">Prices</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="jumbotron">
            <h1>CODETECC<sup><small>&copy</small></sup></h1>
            <p>IT technologies for your business.</p>
        </div>

        <div class="container-fluid text-center">
            <h2>Our services</h2>
            <h4>We offer you this services:</h4>
            <br>
            <div class="row">
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-facetime-video logo-small"></span>
                    <h4>CCTV Security</h4>
                    <p>Our description goes here!</p>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-tasks logo-small"></span>
                    <h4>Data Network installation</h4>
                    <p>Our description goes here!</p>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-phone-alt logo-small"></span>
                    <h4>Voice Network installation</h4>
                    <p>Our description goes here!</p>
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

        <div class="container-fluid gray">
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
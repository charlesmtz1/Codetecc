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
                    <a class="navbar-brand" href="index.php"><img src="assets/img/logo.png" alt="Codetecc Logo" height="60px"></a>
                </div>
                <div class="navbar-right">
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" name="languaje">
                        <?php
                            if (isset($_POST['spanish'])) {
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

        <script src="assets/js/jquery-1.10.2.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.metisMenu.js"></script>
    </body>
</html>